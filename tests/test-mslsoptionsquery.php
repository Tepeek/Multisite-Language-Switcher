<?php
/**
 * Tests for MslsOptionsQuery
 *
 * @author Dennis Ploetner <re@lloc.de>
 * @package Msls
 */

/**
 * WP_Test_MslsOptionsQuery
 */
class WP_Test_MslsOptions extends WP_UnitTestCase {

	/**
	 * SetUp initial settings
	 */
	function setUp() {
		parent::setUp();
		wp_cache_flush();
	}

	/**
	 * Break down for next test
	 */
	function tearDown() {
		parent::tearDown();
	}

	/**
	 * Verify the static create-method
	 */
	function test_create_method() {
		$this->assertNull( MslsOptionsPost::create() );
		return new MslsOptionsQuery();
	}

	/**
	 * Verify the get_current_link-method
	 * @depends test_create_method
	 */
	function test_get_current_link_method( $obj ) {
		$this->assertInternalType( 'string', $obj->get_current_link() );
	}

}
