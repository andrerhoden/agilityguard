<?php

namespace App\Http\Controllers;

use App\Repositories\PublicPortal\DentalPracticesRepository;

use App\Product;

class PublicPortalAjaxController extends Controller
{

    


    public function __construct() 
    {
        
    }


    public function fetchMapDentalPractices( $site, $search, $distance, $unit )
    {
        
        return DentalPracticesRepository::fetchMapDentalPractices( $site, $search, $distance, $unit );
       
    }

    
}
