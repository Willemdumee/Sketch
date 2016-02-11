<?php
/**
 * @package sketch
 * @author Willem Dumee
 * @version 0.1
 */

// hook up with a live demo shop
define ( 'SHOP_ID', '12345');
define ( 'INDEX_PAGE', 'http://sketch.webshopapp.com/nl/' );
define ( 'COLLECTION_PAGE', 'http://sketch.webshopapp.com/nl/mysketchcollection/' );
define ( 'CATALOG_PAGE', 'http://sketch.webshopapp.com/nl/mysketchcatalog/' );
define ( 'PRODUCT_PAGE', 'http://sketch.webshopapp.com/nl/mysketchproduct.html' );
define ( 'BRANDS_PAGE', INDEX_PAGE . 'BRANDS/' );
define ( 'TAGS_PAGE', INDEX_PAGE . 'TAGS/' );
define ( 'TEXTPAGE_PAGE', 'http://sketch.webshopapp.com/nl/service/mysketchpage/' );

// the base url from where your website is visible in the browser
define( 'BASE_URL', 'http://localhost/sketch/' );

// you can leave the rest 'as is' when not changing the directory structure
define( 'ASSET_URL', BASE_URL . 'assets/' );
define( 'IMAGE_URL', ASSET_URL . 'images' );

define ( 'BASE_PATH', dirname( __FILE__ ) );
define ( 'TEMPLATE_PATH', BASE_PATH . '/templates' );
define ( 'ASSET_PATH', BASE_PATH . '/assets' );
