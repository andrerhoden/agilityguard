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

}
