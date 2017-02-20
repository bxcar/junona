<?php

class WPML_LS_Widget extends WP_Widget {

	const SLUG = 'icl_lang_sel_widget';

	public function __construct() {
		parent::__construct(
			self::SLUG, // Base ID
			__( 'Language Switcher', 'sitepress' ), // Name
			array(
				'description' => __( 'Language Switcher', 'sitepress' ),
			)
		);
	}

	public static function register() {
		register_widget( __CLASS__ );
	}

	/**
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		/* @var WPML_Language_Switcher $wpml_language_switcher */
		global $wpml_language_switcher;

		$sidebar = isset( $args['id'] ) ? $args['id'] : '';

		/* @var WPML_LS_Slot $slot */
		$slot = $wpml_language_switcher->get_slot( 'sidebars', $sidebar );
		$ret  = $wpml_language_switcher->render( $slot );

		if ( $slot->get( 'widget_title' ) ) {
			$ret = $args['before_title'] . apply_filters( 'widget_title', $slot->get( 'widget_title' ) )
			       . $args['after_title'] . $ret;
		}

		echo $args['before_widget'] . $ret . $args['after_widget'];
	}

	/**
	 * @param array $instance
	 *
	 * @return string|void
	 */
	public function form( $instance ) {
		// todo: Add a link to the settings page
		// @see https://onthegosystems.myjetbrains.com/youtrack/issue/wpmlcore-3142
	}

	/**
	 * @param array $new_instance
	 * @param array $old_instance
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

	/**
	 * @param WPML_LS_Slot $slot
	 *
	 * @return string
	 */
	public function create_new_instance( WPML_LS_Slot $slot ) {
		require_once( ABSPATH . '/wp-admin/includes/widgets.php' );
		$number = next_widget_id_number( $this->id_base );
		$this->_set( $number );
		$this->_register_one( $number );
		$all_instances            = $this->get_settings();
		$all_instances[ $number ] = $this->get_instance_options_from_slot( $slot );
		$this->save_settings( $all_instances );
		return $this->id;
	}

	/**
	 * @param WPML_LS_Slot $slot
	 * @param int          $widget_id
	 */
	public function update_instance( WPML_LS_Slot $slot, $widget_id = null ) {
		$number = isset( $widget_id ) ? $this->get_number_from_widget_id( $widget_id ) : $this->number;
		$all_instances = $this->get_settings();
		$all_instances[ $number ] = $this->get_instance_options_from_slot( $slot );
		$this->save_settings( $all_instances );
	}

	/**
	 * @param int $widget_id
	 */
	public function delete_instance( $widget_id = null ) {
		$number = isset( $widget_id ) ? $this->get_number_from_widget_id( $widget_id ) : $this->number;
		$all_instances = $this->get_settings();
		unset( $all_instances[ $number ] );
		$this->save_settings( $all_instances );
	}

	/**
	 * @param string $widget_id
	 *
	 * @return int
	 */
	public function get_number_from_widget_id( $widget_id ) {
		return (int) preg_replace( '/^' . self::SLUG . '-/', '', $widget_id, 1 );
	}

	/**
	 * @param WPML_LS_Slot $slot
	 *
	 * @return array
	 */
	private function get_instance_options_from_slot( WPML_LS_Slot $slot ) {
		return array( 'slot' => $slot );
	}
}