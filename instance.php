<?php
/**
 * Instantiates the Gutenberg Training plugin
 *
 * @package GutenbergTraining
 */

namespace GutenbergTraining;

global $gutenberg_training_plugin;

require_once __DIR__ . '/php/class-plugin-base.php';
require_once __DIR__ . '/php/class-plugin.php';

$gutenberg_training_plugin = new Plugin();

/**
 * Gutenberg Training Plugin Instance
 *
 * @return Plugin
 */
function get_plugin_instance() {
	global $gutenberg_training_plugin;
	return $gutenberg_training_plugin;
}
