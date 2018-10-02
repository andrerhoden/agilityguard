<?php

namespace App\Http\Controllers;
use App\Repositories\PublicPortal\IndexRepository;
use App\Repositories\PublicPortal\ProductsRepository;


class PublicPortalController extends Controller
{
    public function index()
    {

        return view('publicportal.index', [
            'testimonials' => IndexRepository::fetchTestimonials()
        ]);
    }

    public function products()
    {
        
        
        return view('publicportal.products', [
            'products' => ProductsRepository::fetchProducts()
        ]);
    }
}
