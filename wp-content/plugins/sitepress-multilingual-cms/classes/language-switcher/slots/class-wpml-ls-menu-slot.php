<?php

class WPML_LS_Menu_Slot extends WPML_LS_Slot {

	/**
	 * @return bool
	 */
	public function is_enabled() {
		return true;
	}

	/**
	 * @return array
	 */
	protected function get_allowed_properties() {
		$allowed_properties = array(
			'position_in_menu' => array( 'type' => 'string', 'force_missing_to' => 'after' ),
			'is_hierarchical'  => array( 'type' => 'int', 'force_missing_to' => 1 ),
			'show'             => array( 'type' => 'int', 'force_missing_to' => 1 ),
			'template'         => array( 'type' => 'string', 'force_missing_to' => $this->core_templates['menu-item'] ),
			'slot_group'       => array( 'type' => 'string', 'force_missing_to' => 'menus' ),
		);

		return array_merge( parent::get_allowed_properties(), $allowed_properties );
	}
}