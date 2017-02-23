<?php
/**
 * @package sketch
 * @author Willem Dumee
 * @version 0.2
 */

$config = json_decode( file_get_contents( './sketch.config.json' ) );

// hook up with a live demo shop
define ( 'SHOP_ID', '172820');
define ( 'INDEX_PAGE', $config->lightspeedUrl );

// the base url from where your website is visible in the browser
define( 'BASE_URL', trailingslashit($config->localUrl) );

// you can leave the rest 'as is' when not changing the directory structure
define( 'ASSET_URL', BASE_URL . 'assets/' );
define( 'IMAGE_URL', ASSET_URL . 'images' );

define ( 'BASE_PATH', dirname( __FILE__ ) );
define ( 'TEMPLATE_PATH', BASE_PATH . '/templates' );
define ( 'ASSET_PATH', BASE_PATH . '/assets' );