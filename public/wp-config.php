<?php

require __DIR__ . '/../vendor/autoload.php';

$application = new WordPlate\Application(realpath(__DIR__ . '/../'));
$application->run();

$table_prefix = env('DB_TABLE_PREFIX', 'wp_');

define( 'UPLOADS', 'wp-content/uploads' );

require_once ABSPATH . 'wp-settings.php';
