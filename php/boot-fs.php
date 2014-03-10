<?php

// This file needs to parse without error in PHP < 5.3

if ( ! ( ! isset( $_SERVER['SERVER_SOFTWARE'] ) && ( php_sapi_name() === 'cli' || ( is_numeric( $_SERVER['argc'] ) && $_SERVER['argc'] > 0 ) ) ) ) {
	echo "Only CLI access.\n";
	die(-1);
}

if ( version_compare( PHP_VERSION, '5.3.0', '<' ) ) {
	printf( "Error: WP-CLI requires PHP %s or newer. You are running version %s.\n", '5.3.0', PHP_VERSION );
	die(-1);
}

define( 'WP_CLI_ROOT', dirname( __DIR__ ) );

include WP_CLI_ROOT . '/php/wp-cli.php';

