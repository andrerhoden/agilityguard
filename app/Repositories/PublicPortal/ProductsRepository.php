<?php

namespace App\Repositories\PublicPortal;

use App\Product;

class ProductsRepository {
    

    public static function fetchProducts() {

        $results = Product::select(['*'])
            ->where('deleted_at', NULL)
            ->get()
            ->toArray();



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
            $results .= "<li><a href='#'>" . $product->name . "</a></li>";
        }
        $results .= "</ul>";
        return $results;

    }

}