<?php

namespace App\Repositories\PublicPortal;

use App\Product;

class ProductsRepository 
{
    
    public static function fetchForHomeProductsBanner()
    {

        $results = Product::select(['*'])
            ->where('deleted_at', NULL)
            ->get()
            ->toArray();
        
        return $results;        

    }

    public static function fetchProducts() {

        $results = Product::select(['*'])
            ->where('deleted_at', NULL)
            ->get();

        foreach( $results as &$rs)
        {
            $imagesFullPath = [];
            $images = json_decode($rs['images'], true);
            foreach( $images as $img ) 
            {
                $imagesFullPath[] = $_ENV['APP_URL'] .'storage/'. $img;
            }

            $rs->imagesFullPath = $imagesFullPath;
        }

        
        return $results;

    }

    public static function fetchProductsForMenu() {

        $results = "<ul>";
        foreach( 
            Product::select(['*'])
                ->where('deleted_at', NULL)
                ->get()
            AS $product
        ){
            $results .= "<li><a href='/products/{$product->slug}'>" . $product->name . "</a></li>";
        }
        $results .= "</ul>";
        return $results;

    }

}
