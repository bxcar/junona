<?php

class WPML_LS_Admin_UI extends WPML_Templates_Factory {

	const NONCE_NAME = 'wpml-language-switcher-admin';
	const PAGE_HOOK  = 'sitepress-multilingual-cms/menu/languages.php';

	/* @var WPML_LS_Templates $templates */
	private $templates;

	/* @var WPML_LS_Settings $settings */
	private $settings;

	/* @var WPML_LS_Render $render */
	private $render;

	/* @var WPML_LS_Inline_Styles $inline_styles */
	private $inline_styles;

	/* @var SitePress $sitepress */
	private $sitepress;

	/**
	 * WPML_Language_Switcher_Menu constructor.
	 *
	 * @param WPML_LS_Templates     $templates
	 * @param WPML_LS_Settings      $settings
	 * @param WPML_LS_Render        $render
	 * @param WPML_LS_Inline_Styles $inline_styles
	 * @param SitePress                            $sitepress
	 */
	public function __construct( $templates, $settings, $render, $inline_styles, $sitepress ) {
		$this->templates     = $templates;
		$this->settings      = $settings;
		$this->render        = $render;
		$this->inline_styles = $inline_styles;
		$this->sitepress     = $sitepress;
		parent::__construct();
	}

	public function init_hooks() {
		add_action( 'wpml_admin_languages_navigation_items', array( $this, 'languages_navigation_items_filter' ) );
		add_action( 'wpml_admin_after_languages_url_format', array( $this, 'after_languages_url_format_action' ) );
		add_action( 'admin_enqueue_scripts',                 array( $this, 'admin_enqueue_scripts_action' ) );
		add_action( 'admin_head-' . self::PAGE_HOOK,         array( $this, 'admin_head_action' ) );
		add_action( 'wp_ajax_wpml-ls-save-settings',         array( $this, 'save_settings_action' ) );
		add_action( 'wp_ajax_wpml-ls-update-preview',        array( $this, 'update_preview_action' ) );
	}

	/**
	 * @param string $hook
	 */
	public function admin_enqueue_scripts_action( $hook ) {
		if ( self::PAGE_HOOK === $hook ) {
			$suffix = $this->sitepress->get_wp_api()->constant( 'SCRIPT_DEBUG' ) ? '' : '.min';

			wp_register_script(
				'wpml-language-switcher-settings', ICL_PLUGIN_URL . '/res/js/language-switchers-settings' . $suffix . '.js',
				array( 'jquery', 'wp-util', 'jquery-ui-sortable', 'jquery-ui-dialog', 'wp-color-picker', 'wp-pointer' )
			);
			wp_enqueue_script( 'wpml-language-switcher-settings' );

			wp_enqueue_style( 'wp-pointer' );
			wp_enqueue_style( 'wp-color-picker' );

			wp_register_style(
				'wpml-language-switcher-settings',
				ICL_PLUGIN_URL . '/res/css/wpml-language-switcher-settings.css'
			);
			wp_enqueue_style( 'wpml-language-switcher-settings' );

			$js_vars = array(
				'nonce'         => wp_create_nonce( self::NONCE_NAME ),
				'menus'         => $this->settings->get_available_menus(),
				'sidebars'      => $this->settings->get_registered_sidebars(),
				'color_schemes' => $this->settings->get_default_color_schemes(),
				'strings'       => $this->get_javascript_strings(),
				'templates'     => $this->templates->get_all_templates_data(),
			);

			wp_localize_script( 'wpml-language-switcher-settings', 'wpml_language_switcher_admin', $js_vars );
		}
	}

	public function admin_head_action() {
		$active_slots = $this->settings->get_active_slots();
		echo $this->inline_styles->get_slots_inline_styles( $active_slots );
		echo $this->inline_styles->get_additional_style();
	}

	public function save_settings_action() {
		if ( $this->has_valid_nonce() && isset( $_POST['settings'] ) ) {
			$new_settings = filter_var( $_POST['settings'], FILTER_SANITIZE_STRING );
			$new_settings = urldecode( $new_settings );
			parse_str( $new_settings, $new_settings );
			$this->settings->save_settings( $new_settings );
			$this->maybe_complete_setup_wizard_step( $new_settings );
			$this->sitepress->get_wp_api()->wp_send_json_success( esc_html__( 'Settings saved', 'sitepress' ) );
		} else {
			$this->sitepress->get_wp_api()->wp_send_json_error( esc_html__( "You can't do that!", 'sitepress' ) );
		}
	}

	/**
	 * @param array $new_settings
	 */
	private function maybe_complete_setup_wizard_step( $new_settings ) {
		if ( isset( $new_settings['submit_setup_wizard'] ) && $new_settings['submit_setup_wizard'] == 1 ) {
			$setup_instance = wpml_get_setup_instance();
			$setup_instance->finish_step3();
		}
	}

	public function update_preview_action() {
		$preview = false;

		if ( $this->has_valid_nonce() ) {
			$settings = isset( $_POST['slot_settings'] ) ? filter_var( $_POST['slot_settings'], FILTER_SANITIZE_STRING ) : null;
			$settings = urldecode( $settings );
			parse_str( $settings, $settings );

			foreach ( array('menus', 'sidebars', 'statics' ) as $group ) {
				if ( isset( $settings[ $group ] ) ) {
					$slot_slug                                      = key( $settings[ $group ] );
					$settings[ $group ][ $slot_slug ]['slot_slug']  = $slot_slug;
					$settings[ $group ][ $slot_slug ]['slot_group'] = $group;
					$settings = $this->settings->convert_slot_settings_to_objects( $settings );
					$slot     = $settings[ $group ][ $slot_slug ];
					$preview  = $this->render->get_preview( $slot );
					$this->sitepress->get_wp_api()->wp_send_json_success( $preview );
				}
			}
		}

		if ( ! $preview ) {
			$this->sitepress->get_wp_api()->wp_send_json_error( esc_html__( 'Preview update failed', 'sitepress' ) );
		}
	}

	/**
	 * @return bool
	 */
	private function has_valid_nonce() {
		$nonce = filter_var( $_POST['nonce'], FILTER_SANITIZE_FULL_SPECIAL_CHARS );
		return (bool) wp_verify_nonce( $nonce, self::NONCE_NAME );
	}

	/**
	 * @param array $items
	 *
	 * @return array
	 */
	public function languages_navigation_items_filter( $items ) {
		$item_to_insert  = array( '#wpml-ls-settings-form' => esc_html__( 'Language switcher options', 'sitepress' ) );
		$insert_position = array_search( '#lang-sec-2', array_keys( $items ) ) + 1;

		$items = array_merge(
			array_slice( $items, 0, $insert_position),
			$item_to_insert,
			array_slice( $items, $insert_position )
		);

		return $items;
	}

	public function after_languages_url_format_action() {
		$this->render();
	}

	private function render() {
		$setup_wizard_step = (int) $this->sitepress->get_setting( 'setup_wizard_step' );
		$setup_complete    = $this->sitepress->get_setting( 'setup_complete' );
		$active_languages  = $this->sitepress->get_active_languages();

		if ( 3 === $setup_wizard_step || ( ! empty( $setup_complete ) && count( $active_languages ) > 1 ) ) {
			parent::show();
		}
	}

	protected function init_template_base_dir() {
		$this->template_paths = array(
			ICL_PLUGIN_PATH . '/templates/menu/',
		);
	}

	/**
	 * @return string
	 */
	public function get_template() {
		return 'layout.twig';
	}

	/**
	 * @return array
	 */
	private function get_all_previews() {
		$previews = array();

		foreach ( array( 'menus', 'sidebars', 'statics' ) as $slot_group ) {

			$previews[ $slot_group ] = array();

			foreach ( $this->settings->get_setting( $slot_group ) as $slug => $slot_settings ) {
				$prev = $this->render->get_preview( $slot_settings );

				foreach ( array( 'html', 'css', 'js', 'styles' ) as $preview_part ) {
					$previews[ $slot_group ][ $slug ][ $preview_part ] = $prev[ $preview_part ];
				}
			}
		}

		return $previews;
	}

	/**
	 * @return array
	 */
	public function get_model() {
		$model = array(
			'strings'  => array(
				'misc'		    	=> $this->get_misc_strings(),
				'tooltips'          => $this->get_tooltip_strings(),
				'color_picker'      => $this->get_color_picker_strings(),
				'options'           => $this->get_options_section_strings(),
				'menus'             => $this->get_menus_section_strings(),
				'sidebars'          => $this->get_sidebars_section_strings(),
				'footer'            => $this->get_footer_section_strings(),
				'post_translations' => $this->get_post_translations_strings(),
				'shortcode_actions' => $this->get_shortcode_actions_strings(),
			),
			'data' 			        => array(
				'templates' => $this->templates->get_templates(),
				'menus'     => $this->settings->get_available_menus(),
				'sidebars'  => $this->settings->get_registered_sidebars(),
			),
			'ordered_languages'     => $this->settings->get_ordered_languages(),
			'settings'              => $this->settings->get_settings_model(),
			'settings_slug'         => $this->settings->get_settings_base_slug(),
			'previews'              => $this->get_all_previews(),
			'color_schemes'         => $this->settings->get_default_color_schemes(),
			'notifications'         => $this->get_notifications(),
			'default_menus_slot'    => $this->settings->get_default_slot_arguments( 'menus' ),
			'default_sidebars_slot' => $this->settings->get_default_slot_arguments( 'sidebars' ),
			'setup_complete'        => $this->sitepress->get_setting( 'setup_complete' ),
			'setup_step_2_nonce_field'  => wp_nonce_field( 'setup_got_to_step2_nonce', '_icl_nonce_gts2', true, false ),
		);

		return $model;
	}

	/**
	 * @return array
	 */
	public function get_misc_strings() {
		return array(
			'no_templates'               => __( 'There are no templates available.', 'sitepress' ),
			'label_preview'              => _x( 'Preview', 'Language switcher preview', 'sitepress' ),
			'label_position'             => _x( 'Position', 'Language switcher preview', 'sitepress' ),
			'label_actions'              => _x( 'Actions', 'Language switcher preview', 'sitepress' ),
			'button_save'                => __( 'Save', 'sitepress' ),
			'button_cancel'              => __( 'Cancel', 'sitepress' ),
			'title_what_to_include'      => __( 'What to include in the language switcher:', 'sitepress' ),
			'label_include_flag'         => __( 'Flag', 'sitepress' ),
			'label_include_native_lang'  => __( 'Native language name', 'sitepress' ),
			'label_include_display_lang' => __( 'Language name in current language', 'sitepress' ),
			'label_include_current_lang' => __( 'Current language', 'sitepress' ),
			'templates_dropdown_label'   => __( 'Language switcher style:', 'sitepress' ),
			'templates_wpml_group'       => __( 'WPML', 'sitepress' ),
			'templates_custom_group'     => __( 'Custom', 'sitepress' ),
			'title_action_edit'          => __( 'Edit language switcher', 'sitepress' ),
			'title_action_delete'        => __( 'Delete language switcher', 'sitepress' ),
			'button_back'                => __( 'Back', 'sitepress' ),
			'button_next'                => __( 'Next', 'sitepress' ),
		);
	}

	/**
	 * @return array
	 */
	public function get_tooltip_strings() {
		return array(
			'languages_order'               => __( 'This is the order in which the languages will be displayed in the language switcher.', 'sitepress' ),
			'languages_without_translation' => __( 'Some content may not be translated to all languages. Choose what should appear in the language switcher when translation is missing.', 'sitepress' ),
			'preserve_url_arguments'        => __( 'Add a comma-separated list of URL arguments that you want WPML to pass when switching languages.', 'sitepress' ),
			'additional_css'                => __( 'Enter CSS to add to the page. This is useful when you want to add styling to the language switcher, without having to edit the CSS file on the server.', 'sitepress' ),
			'section_menus'                 => __( 'xyz Some content for menus section', 'sitepress' ),
			'section_sidebars'              => __( 'xyz Some content for sidebars section', 'sitepress' ),
			'section_footer'                => __( 'xyz Some content for footer section', 'sitepress' ),
			'section_post_translations'     => __( 'You can display links to translation of posts before the post and after it. These links look like "This post is also available in..."', 'sitepress' ),
			'section_shortcode_action'      => __( 'xyz Some content for shortcode action section', 'sitepress' ) . '<br><a href="https://wpml.org/">test link</a>',
			'add_menu_disabled'             => __( 'The button is disabled because all existing menus have a language switcher assigned.', 'sitepress' ),
			'add_sidebar_disabled'          => __( 'The button is disabled because all existing widget areas have a language switcher assigned.', 'sitepress' ),
			'what_to_include'               => __( 'Elements to include in the language switcher.', 'sitepress' ),
			'available_menus'               => __( 'Select the menus, in which to display the language switcher.', 'sitepress' ),
			'available_sidebars'            => __( 'Select the widget area where to include the language switcher.', 'sitepress' ),
			'available_templates'           => __( 'Select the style of the language switcher.', 'sitepress' ),
			'menu_style_type'               => __( 'Select how to display the language switcher in the menu. Choose "flat" to display all the items at the same level or "hierarchical" to display the current language as parent and other languages as children.', 'sitepress' ),
			'menu_position'                 => __( 'Select the position to display the language switcher in the menu.', 'sitepress' ),
			'widget_title'                  => __( 'Enter the title of the widget or leave empty for no title.', 'sitepress' ),
			'post_translation_position'     => __( 'Select the position to display the post translations links.', 'sitepress' ),
			'alternative_languages_text'    => __( 'This text appears before the list of languages. Your text needs to include the string %s which is a placeholder for the actual links.', 'sitepress' ),
		);
	}

	/**
	 * @return array
	 */
	public function get_options_section_strings() {
		return array(
			'section_title'                        => __( 'Language switcher options', 'sitepress' ),
			'section_description'                  => __( 'The language order and other options in this section are applied to all the language switchers.', 'sitepress' ),
			'label_language_order'                 => __( 'Order of languages', 'sitepress' ),
			'tip_drag_languages'                   => __( 'Drag and drop the languages to change their order', 'sitepress' ),
			'label_languages_with_no_translations' => __( 'How to handle languages without translation', 'sitepress' ),
			'option_skip_link'                     => __( 'Skip language', 'sitepress' ),
			'option_link_home'                     => __( 'Link to home of language for missing translations', 'sitepress' ),
			'label_preserve_url_args'              => __( 'Preserve URL arguments', 'sitepress' ),
			'label_additional_css'                 => __( 'Additional CSS', 'sitepress' ),
		);
	}

	/**
	 * @return array
	 */
	public function get_menus_section_strings() {
		return array(
			'section_title'         => __( 'Menu language switcher', 'sitepress' ),
			'add_button_label'      => __( 'Add a new language switcher to a menu', 'sitepress' ),
			'select_label'          => __( 'Menu', 'sitepress' ),
			'select_option_choose'  => __( 'Choose a menu', 'sitepress' ),
			'position_label'        => __( 'Position:', 'sitepress' ),
			'position_first_item'   => __( 'First menu item', 'sitepress' ),
			'position_last_item'    => __( 'Last menu item', 'sitepress' ),
			'is_hierarchical_label' => __( 'Language menu items style:', 'sitepress' ),
			'flat'                  => __( 'List of languages', 'sitepress' ),
			'flat_desc'             => __( 'good for menus that display items as a list', 'sitepress' ),
			'hierarchical'          => __( 'Dropdown', 'sitepress' ),
			'hierarchical_desc'     => __( 'good for menus that support drop-downs', 'sitepress' ),
			'dialog_title'          => __( 'Edit Menu Language Switcher', 'sitepress' ),
			'dialog_title_new'      => __( 'New Menu Language Switcher', 'sitepress' ),
		);
	}

	/**
	 * @return array
	 */
	public function get_sidebars_section_strings() {
		return array(
			'section_title'        => __( 'Widget language switcher', 'sitepress' ),
			'add_button_label'     => __( 'Add a new language switcher to a widget area', 'sitepress' ),
			'select_label'         => __( 'Widget area', 'sitepress' ),
			'select_option_choose' => __( 'Choose a widget area', 'sitepress' ),
			'label_widget_title'   => __( 'Widget title:', 'sitepress' ),
			'dialog_title'         => __( 'Edit Widget Area Language Switcher', 'sitepress' ),
			'dialog_title_new'     => __( 'New Widget Area language switcher', 'sitepress' ),
		);
	}

	/**
	 * @return array
	 */
	public function get_footer_section_strings() {
		return array(
			'section_title' => __( 'Footer language switcher', 'sitepress' ),
			'show'          => __( 'Show language switcher in footer', 'sitepress' ),
			'dialog_title'  => __( 'Edit Footer Language Switcher', 'sitepress' ),
		);
	}

	/**
	 * @return array
	 */
	public function get_post_translations_strings() {
		return array(
			'section_title'                      => __( 'Links to translation of posts', 'sitepress' ),
			'show'                               => __( 'Show links above or below posts, offering them in other languages', 'sitepress' ),
			'position_label'                     => __( 'Position of link(s):', 'sitepress' ),
			'position_above'                     => __( 'Above post', 'sitepress' ),
			'position_below'                     => __( 'Below post', 'sitepress' ),
			'label_alternative_languages_text'   => __( 'Text for alternative languages for posts:', 'sitepress' ),
			'default_alternative_languages_text' => __( 'This post is also available in: %s', 'sitepress' ),
			'dialog_title'                       => __( 'Edit Post Translations Language Switcher', 'sitepress' ),
		);
	}

	/**
	 * @return array
	 */
	public function get_shortcode_actions_strings() {
		return array(
			'section_title'          => __( 'Language switcher as shortcode or action', 'sitepress' ),
			'section_description'    => __( 'The default language switcher can be added to your theme by inserting this PHP code:', 'sitepress' ),
			'customize_button_label' => __( 'Customize', 'sitepress' ),
			'dialog_title'           => __( 'Edit Shortcode Actions Language Switcher', 'sitepress' ),
		);
	}

	/**
	 * @return array
	 */
	public function get_color_picker_strings() {
		return array(
			'panel_title'          => __( 'Language switcher colors', 'sitepress' ),
			'label_color_preset'   => __( 'Color themes:', 'sitepress' ),
			'select_option_choose' => __( 'Select a preset', 'sitepress' ),
			'label_normal_scheme'  => __( 'Normal', 'sitepress' ),
			'label_hover_scheme'   => __( 'Hover', 'sitepress' ),
			'background'           => __( 'Background', 'sitepress' ),
			'border'               => __( 'Border', 'sitepress' ),
			'font_current'         => __( 'Current language font color', 'sitepress' ),
			'background_current'   => __( 'Current language background color', 'sitepress' ),
			'font_other'           => __( 'Other language font color', 'sitepress' ),
			'background_other'     => __( 'Other language background color', 'sitepress' ),
		);
	}

	/**
	 * @return array
	 */
	public function get_javascript_strings() {
		return array(
			'confirmation_item_remove' => esc_html__( 'Do you really want to remove this item?', 'sitepress' ),
			'leave_text_box_to_save'   => esc_html__( 'Leave the text box to auto-save', 'sitepress' ),
		);
	}

	/**
	 * @return array
	 */
	private function get_notifications() {
		$notifications = array();

		if ( $this->sitepress->get_wp_api()->constant( 'ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS' ) ) {
			$notifications['css_not_loaded'] = sprintf(
				__( "%s is defined in your theme. The language switcher can only be customized using the theme's CSS.", 'sitepress' ),
				'ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS'
			);
		}

		return $notifications;
	}
}
