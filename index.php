<?php
/**
 * @package sketch
 * @author Willem Dumee
 * @version 0.2
 */

require_once dirname( __FILE__ ) . '/vendor/autoload.php';
require_once dirname( __FILE__ ) . '/includes/Helpers.php';
require_once dirname( __FILE__ ) . '/includes/DrifterTwigExtension.php';

require_once dirname( __FILE__ ) . '/config.php';


/* TODO add to autoload */

/* TODO create loader for stylesheets */
$loader = new Twig_Loader_Filesystem( 'templates' );
$twig   = new Twig_Environment( $loader, array(
	'debug' => true
) );

$active_test = new Twig_SimpleTest( 'active', function ( $value ) {
	if ( isset( $value ) && $value == $_GET['template'] ) {
		return true;
	}

	return false;
} );
$twig->addTest( $active_test );

$twig->addExtension( new Twig_Extension_Debug() );
$twig->addExtension( new DrifterTwigExtension() );

$template = $twig->loadTemplate( 'layouts/custom.rain' );

$templateData = '';


$protocol = 'http://';
if ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] != 'off' ) {
	$protocol = 'https://';
}

$uri = '';
if ( isset( $_GET['path'] ) ) {
	$uri = $_GET['path'];
}

$templateData = file_get_contents( INDEX_PAGE . $uri . '?format=json' );

if ( false === $templateData ) {
	// redirect to home page
	$templateData = file_get_contents( INDEX_PAGE . '?format=json' );
}

$jsonTemplate = json_decode( $templateData, true );

// in case of redirect by lightspeed there is an html string that can not be encoded
// this happens when clicking on a link in headlines
if ( json_last_error() > 0 ) {
	$templateData = file_get_contents( INDEX_PAGE . '?format=json' );
	$jsonTemplate = json_decode( $templateData, true );
}

$jsonTemplate['controller']  = $jsonTemplate;
$jsonTemplate['development'] = true;
$jsonTemplate['base_url']    = BASE_URL;

echo $template->render( $jsonTemplate );
