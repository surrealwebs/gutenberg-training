<?php
/**
 * Test_Gutenberg_Training
 *
 * @package GutenbergTraining
 */

namespace GutenbergTraining;

/**
 * Class Test_Gutenberg_Training
 *
 * @package GutenbergTraining
 */
class Test_Gutenberg_Training extends \WP_UnitTestCase {

	/**
	 * Test _gutenberg_training_php_version_error().
	 *
	 * @see _gutenberg_training_php_version_error()
	 */
	public function test_gutenberg_training_php_version_error() {
		ob_start();
		_gutenberg_training_php_version_error();
		$buffer = ob_get_clean();
		$this->assertContains( '<div class="error">', $buffer );
	}

	/**
	 * Test _gutenberg_training_php_version_text().
	 *
	 * @see _gutenberg_training_php_version_text()
	 */
	public function test_gutenberg_training_php_version_text() {
		$this->assertContains( 'Gutenberg Training plugin error:', _gutenberg_training_php_version_text() );
	}
}
