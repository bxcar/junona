<?php

class WPML_LS_Migration extends WPML_SP_User {

	/* @var WPML_LS_Settings $settings */
	private $settings;

	/* @var WPML_LS_Slot_Factory $slot_factory */
	private $slot_factory;

	/* @var string $icl_options_slug */
	private $icl_options_slug = 'icl_sitepress_settings';

	/* @var array $icl_options */
	private $icl_options;

	/* @var string $old_settings_key An option key from the old language switcher to detect an old install */
	private $old_settings_key = 'icl_lso_flags'; // todo: make sure this key is not set anymore in new installs (integration)

	/**
	 * WPML_LS_Migration constructor.
	 *
	 * @param WPML_LS_Settings $settings
	 * @param SitePress                       $sitepress
	 * @param WPML_LS_Slot_Factory            $slot_factory
	 */
	public function __construct( $settings, $sitepress, $slot_factory ) {
		$this->settings     = $settings;
		$this->slot_factory = $slot_factory;
		parent::__construct( $sitepress );
	}

	/**
	 * @return array
	 */
	public function get_converted_settings() {
		$this->icl_options = $this->sitepress->get_wp_api()->get_option( $this->icl_options_slug );
		$new_settings      = array( 'migrated' => 0 );

		if ( $this->icl_options && isset( $this->icl_options[ $this->old_settings_key ] ) ) {
			$new_settings                                 = $this->get_converted_global_settings();
			$new_settings['menus']                        = $this->get_converted_menus_settings();
			$new_settings['sidebars']                     = $this->get_converted_sidebars_settings();
			$new_settings['statics']['footer']            = $this->get_converted_footer_settings();
			$new_settings['statics']['post_translations'] = $this->get_converted_post_translations_settings();
			$new_settings['statics']['shortcode_actions'] = $this->get_converted_shortcode_actions_settings();

			$new_settings['migrated'] = 1;
		}

		return $new_settings;
	}

	/**
	 * @return array
	 */
	private function get_converted_global_settings() {
		$new_settings['additional_css'] = isset( $this->icl_options['icl_additional_css'] )
			? $this->icl_options['icl_additional_css'] : '';
		$new_settings['copy_parameters'] = isset( $this->icl_options['icl_lang_sel_copy_parameters'] )
			? $this->icl_options['icl_lang_sel_copy_parameters'] : '';

		return $new_settings;
	}

	/**
	 * @return array
	 */
	private function get_converted_menus_settings() {
		$menus_settings = array();

		if ( $this->get_old_setting( 'display_ls_in_menu' ) ) {
			$menu_id = $this->get_old_setting( 'menu_for_ls' );
			$menu_id = $this->sitepress->get_object_id( $menu_id, 'nav_menu', true, $this->sitepress->get_default_language() );
			remove_filter( 'get_term', array( $this->sitepress, 'get_term_adjust_id' ), 1 );
			$menu = get_term( $menu_id, 'nav_menu' );
			add_filter( 'get_term', array( $this->sitepress, 'get_term_adjust_id' ), 1, 1 );

			if ( $menu && ! is_wp_error( $menu ) ) {
				$s = array(
					'slot_group'                    => 'menus',
					'slot_slug'                     => $menu->slug,
					'show'                          => 1,
					'template'                      => $this->get_template_for( 'menus' ),
					'display_flags'                 => $this->get_old_setting( 'icl_lso_flags' ),
					'display_names_in_native_lang'  => $this->get_old_setting( 'icl_lso_native_lang' ),
					'display_names_in_current_lang' => $this->get_old_setting( 'icl_lso_display_lang' ),
					'display_link_for_current_lang' => 1,
					'position_in_menu'              => 'after',
					'is_hierarchical'               => $this->get_old_setting( 'icl_lang_sel_type' ) === 'dropdown' ? 1 : 0,
				);

				$menus_settings[ $menu->slug ] = $this->slot_factory->get_slot( $s );
			}
		}

		return $menus_settings;
	}

	/**
	 * @return array
	 */
	private function get_converted_sidebars_settings() {
		$sidebars_settings = array();

		$sidebars_widgets = wp_get_sidebars_widgets();

		foreach ( $sidebars_widgets as $sidebar_slug => $widgets ) {
			$sidebar_has_selector = false;

			if ( is_array( $widgets ) ) {
				foreach ( $widgets as $widget ) {
					if ( strpos( $widget, WPML_LS_Widget::SLUG ) === 0 ) {
						$sidebar_has_selector = true;
						break;
					}
				}
			}

			if ( $sidebar_has_selector ) {
				$s = array(
					'slot_group'                    => 'sidebars',
					'slot_slug'                     => $sidebar_slug,
					'show'                          => 1,
					'template'                      => $this->get_template_for( 'sidebars' ),
					'display_flags'                 => $this->get_old_setting( 'icl_lso_flags' ),
					'display_names_in_native_lang'  => $this->get_old_setting( 'icl_lso_native_lang' ),
					'display_names_in_current_lang' => $this->get_old_setting( 'icl_lso_display_lang' ),
					'display_link_for_current_lang' => 1,
					'widget_title'                  => $this->get_old_setting( 'icl_widget_title_show' )
						? esc_html__( 'Languages', 'sitepress' ) : '',
				);

				$s = array_merge( $s, $this->get_color_picker_settings_for( 'sidebars' ) );

				$sidebars_settings[ $sidebar_slug ] = $this->slot_factory->get_slot( $s );;
			}
		}

		return $sidebars_settings;
	}

	/**
	 * @return array
	 */
	private function get_converted_footer_settings() {

		$s = array(
			'slot_group'                    => 'statics',
			'slot_slug'                     => 'footer',
			'show'                          => $this->get_old_setting( 'icl_lang_sel_footer' ),
			'template'                      => $this->get_template_for( 'footer' ),
			'display_flags'                 => $this->get_old_setting( 'icl_lso_flags' ),
			'display_names_in_native_lang'  => $this->get_old_setting( 'icl_lso_native_lang' ),
			'display_names_in_current_lang' => $this->get_old_setting( 'icl_lso_display_lang' ),
			'display_link_for_current_lang' => 1,
		);

		$s = array_merge( $s, $this->get_color_picker_settings_for( 'footer' ) );

		return $this->slot_factory->get_slot( $s );
	}

	/**
	 * @return array
	 */
	private function get_converted_post_translations_settings() {
		$s = array(
			'slot_group'                    => 'statics',
			'slot_slug'                     => 'post_translations',
			'show'                          => $this->get_old_setting( 'icl_post_availability' ),
			'template'                      => $this->get_template_for( 'post_translations' ),
			'display_before_content'        => $this->get_old_setting( 'icl_post_availability_position' ) === 'above' ? 1 : 0,
			'display_after_content'         => $this->get_old_setting( 'icl_post_availability_position' ) === 'below' ? 1 : 0,
			'availability_text'             => $this->get_old_setting( 'icl_post_availability_text' ),
			'display_flags'                 => 0,
			'display_names_in_native_lang'  => 0,
			'display_names_in_current_lang' => 1,
			'display_link_for_current_lang' => 0,
		);

		return $this->slot_factory->get_slot( $s );
	}

	/**
	 * @return array
	 */
	private function get_converted_shortcode_actions_settings() {
		$s = array(
			'slot_group'                    => 'statics',
			'slot_slug'                     => 'shortcode_actions',
			'show'                          => 1,
			'template'                      => $this->get_template_for( 'shortcode_actions' ),
			'display_flags'                 => $this->get_old_setting( 'icl_lso_flags' ),
			'display_names_in_native_lang'  => $this->get_old_setting( 'icl_lso_native_lang' ),
			'display_names_in_current_lang' => $this->get_old_setting( 'icl_lso_display_lang' ),
			'display_link_for_current_lang' => 1,
		);

		$s = array_merge( $s, $this->get_color_picker_settings_for( 'shortcode_actions' ) );

		return $this->slot_factory->get_slot( $s );
	}

	/**
	 * @param string $context
	 *
	 * @return array
	 */
	private function get_color_picker_settings_for( $context ) {
		$ret = array();

		$map = array(
			'font-current-normal'       => 'font_current_normal',
			'font-current-hover'        => 'font_current_hover',
            'background-current-normal' => 'background_current_normal',
            'background-current-hover'  => 'background_current_hover',
            'font-other-normal'         => 'font_other_normal',
            'font-other-hover'          => 'font_other_hover',
            'background-other-normal'   => 'background_other_normal',
            'background-other-hover'    => 'background_other_hover',
            'border'                    => 'border_normal',
            'background'                => 'background_normal',
		);

		$key      = $context !== 'footer' ? 'icl_lang_sel_config' : 'icl_lang_sel_footer_config';
		$settings = isset( $this->icl_options[ $key ] ) ? $this->icl_options[ $key ] : array();

		foreach ( $settings as $k => $v ) {
			$ret[ $map[ $k ] ] = $v;
		}

		return array_filter( $ret );
	}

	/**
	 * @param string $key
	 *
	 * @return mixed|string|int|null
	 */
	private function get_old_setting($key ) {
		return isset( $this->icl_options[ $key ] ) ? $this->icl_options[ $key ] : null;
	}

	/**
	 * @param string $slot_type
	 *
	 * @return mixed
	 */
	private function get_template_for( $slot_type ) {
		$templates       = $this->settings->get_core_templates();
		$type            = 'dropdown';
		$old_type        = $this->get_old_setting( 'icl_lang_sel_type' );        // dropdown | list
		$old_stype       = $this->get_old_setting( 'icl_lang_sel_stype' );       // classic | mobile-auto | mobile
		$old_orientation = $this->get_old_setting( 'icl_lang_sel_orientation' ); // vertical | horizontal

		if ( $slot_type === 'menus' ) {
			$type = 'menu-item';
		} else if ( $slot_type === 'sidebars' ) {
			$type = $old_type === 'dropdown' ? 'dropdown' : ( $old_orientation === 'vertical' ? 'list-vertical' : 'list-horizontal' );
		} else if ( $slot_type === 'shortcode_actions' ) {
			$type = $old_type === 'dropdown' ? 'dropdown' : ( $old_orientation === 'vertical' ? 'list-vertical' : 'list-horizontal' );
		} else if ( $slot_type === 'footer' ) {
			$type = 'list-horizontal';
		} else if ( $slot_type === 'post_translations' ) {
			$type = 'post-translations';
		}

		if ( $type === 'dropdown' ) {
			$type = $old_stype === 'mobile' ? 'dropdown-click' : 'dropdown';
		}

		return $templates[ $type ];
	}
}