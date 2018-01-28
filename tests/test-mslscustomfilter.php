<?php
/**
 * Tests for MslsCustomFilter
 *
 * @author Dennis Ploetner <re@lloc.de>
 * @package Msls
 */

use lloc\Msls\MslsCustomFilter;

/**
 * WP_Test_MslsCustomFilter
 */
class WP_Test_MslsCustomFilter extends Msls_UnitTestCase {

	/**
	 * Verify the init-method
	 */
	function test_init_method() {
		$obj = MslsCustomFilter::init();
		$this->assertInstanceOf( MslsCustomFilter::class, $obj );
		return $obj;
	}

	/**
	 * Verify the execute_filter-method
	 *
	 * @depends test_init_method
	 */
	function test_execute_filter_method( $obj ) {
		$query = $this->getMockBuilder( WP_Query::class )->getMock();

		$this->assertFalse( $obj->execute_filter( $query ) );
	}

}
