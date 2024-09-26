<?php

// Require the composer autoload for getting conflict-free access to enqueue
require_once __DIR__ . '/vendor/autoload.php';

// Instantiate
global 
$enqueue = new \WPackio\Enqueue( 'storefrontChild', 'dist', '1.0.0', 'theme', __FILE__ );