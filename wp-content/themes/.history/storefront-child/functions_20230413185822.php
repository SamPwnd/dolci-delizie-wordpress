<?php

// Require the composer autoload for getting conflict-free access to enqueue
require_once __DIR__ . '/vendor/autoload.php';

// Do stuff through this plugin
class MyThemeInit {
	/**
	 * @var \WPackio\Enqueue
	 */
	public $enqueue;

	public function __construct() {
		// It is important that we init the Enqueue class right at the plugin/theme load time
		$this->enqueue = new \WPackio\Enqueue(
			// Name of the project, same as `appName` in wpackio.project.js
			'storefrontChild',
			// Output directory, same as `outputPath` in wpackio.project.js
			'dist',
			// Version of your plugin
			'0.1.0',
			// Type of your project, same as `type` in wpackio.project.js
			'theme',
			// Plugin location, pass false in case of theme.
			false
		);
		// Enqueue a few of our entry points
		//add_action( 'wp_enqueue_scripts', [ $this, 'scripts_enqueue' ] );
        echo $this->enqueue
	}

	public function scripts_enqueue() {
		// Enqueue files[0] (name = app) - entryPoint main
		$this->enqueue->enqueue( 'app', 'main', [] );
	}
}

// Init
new MyThemeInit();