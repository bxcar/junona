<?php

class WPML_LS_Slot_Factory {

	/**
	 * @var array $core_templates
	 */
	private $core_templates;

	public function __construct( array $core_templates ) {
		$this->core_templates = $core_templates;
	}

	/**
	 * @param array|WPML_LS_Slot $args
	 *
	 * @return WPML_LS_Slot
	 */
	public function get_slot( $args ) {

		if ( is_array( $args ) ) {

			$args['slot_group'] = isset( $args['slot_group'] ) ? $args['slot_group'] : null;
			$args['slot_slug']  = isset( $args['slot_slug'] ) ? $args['slot_slug'] : null;
			$slot               = new WPML_LS_Slot( $args, $this->core_templates );

			switch ( $args['slot_group'] ) {
				case 'menus':
					$slot = new WPML_LS_Menu_Slot( $args, $this->core_templates );
					break;

				case 'sidebars':
					$slot = new WPML_LS_Sidebar_Slot( $args, $this->core_templates );
					break;

				case 'statics':
					switch ( $args['slot_slug'] ) {
						case 'footer':
							$slot = new WPML_LS_Footer_Slot( $args, $this->core_templates );
							break;

						case 'post_translations':
							$slot = new WPML_LS_Post_Translations_Slot( $args, $this->core_templates );
							break;

						case 'shortcode_actions':
							$slot = new WPML_LS_Shortcode_Actions_Slot( $args, $this->core_templates );
							break;
					}
					break;
			}

		} else {
			$slot = $args;
		}

		return $slot;
	}
}