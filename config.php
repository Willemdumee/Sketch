<?php
/**
 * @package sketch
 * @author Willem Dumee
 * @version 0.1
 */

//local
// the base url from where your website is visible in the browser
define( 'BASE_URL', 'http://localhost/sketch/' );
define( 'ASSET_URL', BASE_URL . 'assets/' );
define( 'IMAGE_URL', ASSET_URL . 'images' );

define ( 'BASE_PATH', dirname( __FILE__ ) );
define ( 'TEMPLATE_PATH', BASE_PATH . '/templates' );
define ( 'ASSET_PATH', BASE_PATH . '/assets' );

// hook up with a live demo shop
define ( 'SHOP_ID', '54657');
define ( 'INDEX_PAGE', 'http://berlin.webshopapp.com/nl/' );
define ( 'COLLECTION_PAGE', 'http://berlin.webshopapp.com/nl/lakschoenen/' );
define ( 'CATALOG_PAGE', 'http://berlin.webshopapp.com/nl/veterschoenen/' );
define ( 'PRODUCT_PAGE', 'http://berlin.webshopapp.com/nl/timberland-lorem-ipsum-22495176.html' );
define ( 'BRANDS_PAGE', INDEX_PAGE . 'brands/' );
define ( 'TAGS_PAGE', INDEX_PAGE . 'tags/' );
define ( 'TEXTPAGE_PAGE', 'http://berlin.webshopapp.com/nl/service/berlin-documentatie-made-by-totalli/' );

