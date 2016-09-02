<?php
/**
 * @package sketch
 * @author Willem Dumee
 * @version 0.2
 */

// hook up with a live demo shop
define ( 'SHOP_ID', '12345');
define ( 'INDEX_PAGE', 'http://sketch.webshopapp.com/en/' );
define ( 'COLLECTION_PAGE', 'http://sketch.webshopapp.com/en/pop-rock/' );
define ( 'CATALOG_PAGE', 'http://sketch.webshopapp.com/en/alternative-rock/' );
define ( 'PRODUCT_PAGE', 'http://sketch.webshopapp.com/en/alternative-rock/grunge/' );
define ( 'BRANDS_PAGE', INDEX_PAGE . 'brands/' );
define ( 'TAGS_PAGE', INDEX_PAGE . 'tags/' );
define ( 'TEXTPAGE_PAGE', 'http://sketch.webshopapp.com/en/service/about/' );

// the base url from where your website is visible in the browser
define( 'BASE_URL', 'http://localhost/sketch/' );

// you can leave the rest 'as is' when not changing the directory structure
define( 'ASSET_URL', BASE_URL . 'assets/' );
define( 'IMAGE_URL', ASSET_URL . 'images' );

define ( 'BASE_PATH', dirname( __FILE__ ) );
define ( 'TEMPLATE_PATH', BASE_PATH . '/templates' );
define ( 'ASSET_PATH', BASE_PATH . '/assets' );