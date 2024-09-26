<?php

// Require the composer autoload for getting conflict-free access to enqueue
require_once __DIR__ . '/vendor/autoload.php';

// Instantiate
global $enq;
$enq = new \WPackio\Enqueue( 'storefrontChild', 'dist', '1.0.0', 'theme', __FILE__ );

//Scrips for the frontend
function enqueueScripts() {
    global $enq;
    $res = $enq->enqueue('app', 'main', ['jquery']);
    //get the handle to localize scripts if necessary (to pass data directly from WP to frontend)
    $entry_point = array_pop($res['js']);
    wp_localize_script($entry_point['handle'], 'MyGlobal', ['a' => 4711]);
}

add_action('wp_enqueue_scripts', 'enqueueScripts');