<?php
namespace Exporter;

/**
 * Exporter and components can register layouts. This class manages the layouts
 * the final JSON will contain.
 *
 * @since 0.4.0
 */
class Component_Layouts {

	private $layouts;

	function __construct() {
		$this->layouts  = array();
	}

	/**
	 * Register a layout into the exporter.
	 *
	 * @since 0.4.0
	 */
	public function register_layout( $name, $spec ) {
		// Only register once, layouts have unique names.
		if ( array_key_exists( $name, $this->layouts ) ) {
			return;
		}

		$this->layouts[ $name ] = $spec;
	}

	/**
	 * Returns all layouts registered so far.
	 *
	 * @since 0.4.0
	 */
	public function get_layouts() {
		return $this->layouts;
	}

}
