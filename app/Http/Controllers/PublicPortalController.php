<?php

namespace App\Http\Controllers;
use App\Repositories\PublicPortal\IndexRepository;
use App\Repositories\PublicPortal\ProductsRepository;
use App\Product;

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

    public function contactus()
    {

        return view('publicportal.contact', [
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }

    public function testimonials()
    {

        return view('publicportal.testimonials', [
            'testimonials' => IndexRepository::fetchTestimonials(),
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }


    public function about()
    {

        return view('publicportal.about', [
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

    public function productDetails( $product )
    {
        
        $product = Product::select(['*'])
            ->where('slug', strtolower($product) )
            ->first();

        if ( !empty( $product ) )
        {
            return view('publicportal.product-details', [
                'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu'],
                'product' => $product
            ]);
        }else {
            return redirect('products');
        }
            


        
    }

    
    public function sports_basketball()
    {
        return view('publicportal.sports.basketball', [
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }
    public function sports_baseball()
    {
        return view('publicportal.sports.baseball', [
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }
    public function sports_boxing()
    {
        return view('publicportal.sports.boxing', [
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }    
    public function sports_cycling()
    {
        return view('publicportal.sports.cycling', [
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }
    public function sports_fitness()
    {
        return view('publicportal.sports.fitness', [
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }
    public function sports_football()
    {
        return view('publicportal.sports.football', [
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }
    public function sports_golf()
    {
        return view('publicportal.sports.golf', [
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }
    public function sports_hockey()
    {
        return view('publicportal.sports.hockey', [
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }
    public function sports_lacrosse()
    {
        return view('publicportal.sports.lacrosse', [
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }
    public function sports_mma()
    {
        return view('publicportal.sports.mma', [
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }
    public function sports_running()
    {
        return view('publicportal.sports.running', [
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }
    public function sports_swimming()
    {
        return view('publicportal.sports.swimming', [
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }
    public function sports_tennis()
    {
        return view('publicportal.sports.tennis', [
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }
    
}
