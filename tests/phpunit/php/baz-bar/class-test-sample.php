<?php
/**
 * Tests for Sample class.
 *
 * @package GutenbergTraining
 */

namespace GutenbergTraining\BazBar;

use GutenbergTraining\Plugin;

/**
 * Tests for Sample class.
 */
class Test_Sample extends \WP_UnitTestCase {

	/**
	 * Test constructor.
	 *
	 * @see Sample::__construct()
	 */
	public function test_construct() {
		$this->assertInstanceOf( Sample::class, \GutenbergTraining\get_plugin_instance()->sample );
	}

	/**
	 * Test init.
	 *
	 * @see Sample::init()
	 */
	public function test_init() {
		$sample = new Sample( new Plugin() );
		$sample->init();
		$this->assertEquals( 99, has_filter( 'body_class', [ $sample, 'body_class' ] ) );
	}

	/**
	 * Test for body_class() method.
	 *
	 * @see Sample::body_class()
	 */
	public function test_body_class() {
		$this->assertEquals( [ 'custom-class-name' ], \GutenbergTraining\get_plugin_instance()->sample->body_class( [] ) );
	}
}
