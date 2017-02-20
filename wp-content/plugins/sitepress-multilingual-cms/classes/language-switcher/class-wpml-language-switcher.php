<?php

/**
 * Class WPML_Language_Switcher
 *
 * Main class
 */
class WPML_Language_Switcher extends WPML_SP_User {

	/* @var Pimple\Container $container */
	private $container;

	/**
	 * WPML_Language_Switcher constructor.
	 *
	 * @param Sitepress $sitepress
	 */
	public function __construct( $sitepress ) {
		parent::__construct( $sitepress );
		$this->configure_container( $sitepress );
	}

	private function configure_container( $sitepress ) {

		$parameters = array(
			'css_prefix'     => 'wpml-ls-',
			'sitepress'      => $sitepress,
			'core_templates' => array(
				'dropdown'          => 'wpml-legacy-dropdown',
				'dropdown-click'    => 'wpml-legacy-dropdown-click',
				'list-vertical'     => 'wpml-legacy-vertical-list',
				'list-horizontal'   => 'wpml-legacy-horizontal-list',
				'post-translations' => 'wpml-legacy-post-translations',
				'menu-item'         => 'wpml-menu-item',
			),
		);

		$this->container = new Pimple\Container( $parameters );

		$this->container['templates'] = function () {
			return new WPML_LS_Templates();
		};

		$this->container['slot_factory'] = function ( $c ) {
			return new WPML_LS_Slot_Factory( $c['core_templates'] );
		};

		$this->container['settings'] = function ( $c ) {
			return new WPML_LS_Settings( $c['templates'], $c['sitepress'], $c['slot_factory'], $c['core_templates'] );
		};

		$this->container['model_build'] = function ( $c ) {
			return new WPML_LS_Model_Build( $c['settings'], $c['sitepress'], $c['css_prefix'] );
		};

		$this->container['inline_styles'] = function ( $c ) {
			return new WPML_LS_Inline_Styles( $c['templates'], $c['settings'], $c['model_build'] );
		};

		$this->container['render'] = function ( $c ) {
			return new WPML_LS_Render( $c['templates'], $c['settings'], $c['model_build'], $c['inline_styles'], $c['sitepress'] );
		};

		$this->container['admin_ui'] = function ( $c ) {
			return new WPML_LS_Admin_UI( $c['templates'], $c['settings'], $c['render'], $c['inline_styles'], $c['sitepress'] );
		};
	}

	public function init_hooks() {
		if ( $this->container['sitepress']->get_setting( 'setup_complete' ) ) {
			add_action( 'widgets_init', array( 'WPML_LS_Widget', 'register' ), 20 );
		}

		$this->container['templates']->init_hooks();
		$this->container['settings']->init_hooks();
		$this->container['render']->init_hooks();
		$this->container['inline_styles']->init_hooks();

		if ( $this->container['sitepress']->get_wp_api()->is_admin()
			&& $this->container['sitepress']->get_wp_api()->current_user_can( 'manage_options' )
		) {
			$this->container['admin_ui']->init_hooks();
		}
	}

	/**
	 * @param string $group
	 * @param string $slot
	 *
	 * @return WPML_LS_Slot
	 */
	public function get_slot( $group, $slot ) {
		return $this->container['settings']->get_slot( $group, $slot );
	}

	/**
	 * @param WPML_LS_Slot $slot
	 *
	 * @return string
	 */
	public function render( $slot ) {
		return $this->container['render']->render( $slot );
	}

	public function display_admin_ui() {
		$this->container['admin_ui']->render();
	}

	/**
	 * @return \Pimple\Container
	 */
	public function get_container() {
		return $this->container;
	}
}
