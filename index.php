<?php
/**
 * @package sketch
 * @author Willem Dumee
 * @version 0.1
 */

require_once dirname( __FILE__ ) . '/config.php';
require_once BASE_PATH . '/vendor/autoload.php';

/* TODO add to autoload */
require_once BASE_PATH . '/includes/DrifterTwigExtension.php';

/* TODO create loader for stylesheets */
$loader = new Twig_Loader_Filesystem( 'templates' );
$twig   = new Twig_Environment( $loader, array(
    'debug' => true
) );
$twig->addExtension( new Twig_Extension_Debug() );
$twig->addExtension( new DrifterTwigExtension() );

$template = $twig->loadTemplate( 'layouts/custom.rain' );

$templateData = '';

if (isset( $_GET['template'] )) {
    // get corresponding template
    switch ($_GET['template']) {
        case 'brands':
            $templateurl = BRANDS_PAGE . '?format=json';
            break;
        case 'catalog':
            $templateurl = CATALOG_PAGE . '?format=json';
            break;
        case 'collection':
            $templateurl = COLLECTION_PAGE . '?format=json';
            break;
        case 'index':
            $templateurl = INDEX_PAGE . '?format=json';
            break;
        case 'product':
            $templateurl = PRODUCT_PAGE . '?format=json';
            break;
        case 'tags':
            $templateurl = TAGS_PAGE . '?format=json';
            break;
        case 'textpage':
            $templateurl = TEXTPAGE_PAGE . '?format=json';
            break;
        default:
            $templateurl = INDEX_PAGE . '?format=json';
    }
    $templateData = file_get_contents( $templateurl );
    if (false === $templateData) {
        // redirect to home page
        $templateData = file_get_contents( INDEX_PAGE . '?format=json' );
    }
} else {
    // home page
    $templateData = file_get_contents( INDEX_PAGE . '?format=json' );
};
$jsonTemplate = json_decode( $templateData, true );

echo $template->render( $jsonTemplate );



