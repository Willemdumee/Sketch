<?php
/**
 * @package sketch
 * @author Willem Dumee
 * @version 0.1
 */

class DrifterTwigExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter( 'money', array( $this, 'moneyFilter' ) ),
            new \Twig_SimpleFilter( 'url', array( $this, 'urlFilter' ) ),
            new \Twig_SimpleFilter( 'url_asset', array( $this, 'url_assetFilter' ) ),
            new \Twig_SimpleFilter( 'url_image', array( $this, 'url_imageFilter' ) ),
            new \Twig_SimpleFilter( 'url_core', array( $this, 'url_coreFilter' ) ),
            new \Twig_SimpleFilter( 't', array( $this, 'translateFilter' ) ),
            new \Twig_SimpleFilter( 'limit', array( $this, 'limitFilter' ) ),
            new \Twig_SimpleFilter( 'collection_url', array( $this, 'collection_urlFilter' ) ),
            new \Twig_SimpleFilter( 'paginate', array( $this, 'paginateFilter' ) )
        );
    }

    public function moneyFilter( $number, $decimals = 2, $decPoint = ',', $thousandsSep = '.' )
    {
        $price = number_format( $number, $decimals, $decPoint, $thousandsSep );
        $price = '€ ' . $price;

        return $price;
    }

    public function urlFilter( $url )
    {
        return BASE_URL . $url;
    }

    public function url_assetFilter( $asset )
    {
        return ASSET_URL . $asset;
    }

    public function url_imageFilter( $image, $directory = '', $name = 'image' )
    {
        $shopid  = str_pad( SHOP_ID, 6, "0", STR_PAD_LEFT );
        $imageid = str_pad( $image, 9, "0", STR_PAD_LEFT );
        $name = preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(str_replace(' ', '', strtolower($name))));

        $url = 'https://static.webshopapp.com/shops/' . $shopid . '/files/' . $imageid . '/' . $directory . '/' . $name . '.jpg';
        if ('' === $directory) {
            $url = 'https://static.webshopapp.com/shops/' . $shopid . '/files/' . $imageid . '/' . $name . '.jpg';
        }
        return $url;
    }

    public function translateFilter( $string )
    {
        return $string;
    }

    public function limitFilter( $input, $limit )
    {
        if (is_array($input)) {
            return array_slice( $input, 0, $limit );
        }
        return substr($input, 0 , $limit);
    }

    public function getName()
    {
        return 'drifter_twig_extension';
    }

    public function collection_urlFilter( $url, $filter )
    {
        return $url;
    }

    public function paginateFilter( $url )
    {
        return $url;
    }

    public function url_coreFilter( $image )
    {

        $url = 'https://static.webshopapp.com/assets/' . $image;

        return $url;
    }
}