<?php

namespace App\Http\Controllers;
use App\Repositories\PublicPortal\IndexRepository;
use App\Repositories\PublicPortal\ProductsRepository;


class PublicPortalController extends Controller
{

    private $__globalValues;


    public function __construct() 
    {
        $this->__globalValues['productsForFooterMenu'] = ProductsRepository::fetchProductsForMenu();
    }


    public function index()
    {

        return view('publicportal.index', [
            'testimonials' => IndexRepository::fetchTestimonials(),
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }

    public function products()
    {
        
        
        return view('publicportal.products', [
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu'],
            'products' => ProductsRepository::fetchProducts()
        ]);
    }
}
