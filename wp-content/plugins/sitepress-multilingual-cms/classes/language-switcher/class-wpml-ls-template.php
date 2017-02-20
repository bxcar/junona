<?php

class WPML_LS_Template extends WPML_Templates_Factory {

	const FILENAME = 'template.twig';

	/* @var array $template */
	private $template;

	/* @var array $model */
	private $model;

	/* @var string $prefix */
	private $prefix = 'wpml-ls-';

	/**
	 * WPML_Language_Switcher_Menu constructor.
	 *
	 * @param array $template_data
	 * @param array $template_model
	 */
	public function __construct( $template_data, $template_model = array() ) {
		$this->template = $this->format_data( $template_data );
		$this->model    = $template_model;
		parent::__construct();
	}

	/**
	 * Make sure some elements are of array type
	 *
	 * @param array $template_data
	 *
	 * @return array
	 */
	private function format_data( $template_data ) {
		foreach ( array( 'path', 'js', 'css' ) as $k ) {
			$template_data[ $k ] = isset( $template_data[ $k ] ) ? $template_data[ $k ] : array();
			$template_data[ $k ] = is_array( $template_data[ $k ] ) ? $template_data[ $k ] : array( $template_data[ $k ] );
		}

		return $template_data;
	}

	/**
	 * @param array $model
	 */
	public function set_model( $model ) {
		$this->model = is_array( $model ) ? $model : array( $model );
	}

	/**
	 * @return string
	 */
	public function get_html() {
		$ret = '';
		if ( !empty( $this->template_paths ) ) {
			$ret = parent::get_view();
		}
		return $ret;
	}

	/**
	 * @return array
	 */
	public function get_styles() {
		return $this->template['css'];
	}

	/**
	 * @return bool
	 */
	public function has_styles() {
		return ! empty( $this->template['css'] );
	}

	/**
	 * @return array
	 */
	public function get_scripts() {
		return $this->template['js'];
	}

	/**
	 * @param int $index
	 *
	 * @return string
	 */
	public function get_resource_handler( $index ) {
		$slug   = isset( $this->template['slug'] ) ? $this->template['slug'] : '';
		$prefix = $this->is_core() ? '' : $this->prefix;
		return $prefix . $slug . '-' . $index;
	}

	/**
	 * @return mixed|string|bool
	 */
	public function get_inline_style_handler() {
		$count = count( $this->template['css'] );
		return $count > 0 ? $this->get_resource_handler( $count - 1 ) : null;
	}

	/**
	 * @return string
	 */
	public function get_version() {
		return $this->template['version'];
	}

	protected function init_template_base_dir() {
		$this->template_paths = $this->template['path'];
	}

	/**
	 * @return string Template filename
	 */
	public function get_template() {

		if ( !isset( $this->template['filename'] ) ) {
			$this->template['filename'] = self::FILENAME;
		}

		return $this->template['filename'];
	}

	/**
	 * @return array
	 */
	public function get_model() {
		return $this->model;
	}

	/**
	 * @return array
	 */
	public function get_template_data() {
		return $this->template;
	}

	/**
	 * return bool
	 */
	public function is_core() {
		return isset( $this->template['is_core'] ) ? (bool) $this->template['is_core'] : false;
	}

	/**
	 * @return array
	 */
	public function supported_slot_types() {
		return isset( $this->template['for'] ) ? $this->template['for'] : array();
	}

	/**
	 * @return array
	 */
	public function force_settings() {
		return isset( $this->template['force_settings'] ) ? $this->template['force_settings'] : array();
	}
}
