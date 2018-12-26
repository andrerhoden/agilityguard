<?php

namespace App\Repositories\DentistPortal;

use App\Product;

class ProductsRepository 
{
    
    public static function fetchProductsForDropDown()
    {

        $rsProducts = Product::select(['id', 'name', 'msrp'])
            ->get()
            ->toArray();

        $return ='';
        foreach( $rsProducts as $rs )
        {
            $return .= "<option value='{$rs['id']}' data-msrp='{$rs['msrp']}' >{$rs['name']} - {$rs['msrp']}</option>";
        }

        return $return;
    }

   

}
