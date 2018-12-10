<?php

namespace App\Repositories\DentistPortal;

use App\Product;

class ProductsRepository 
{
    
    public static function fetchProductsForDropDown()
    {

        $rsProducts = Product::select(['id', 'name'])
            ->get()
            ->toArray();

        $return ='';
        foreach( $rsProducts as $rs )
        {
            $return .= "<option value='{$rs['id']}'>{$rs['name']}</option>";
        }

        return $return;
    }

   

}
