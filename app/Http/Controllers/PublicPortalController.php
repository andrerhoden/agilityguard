<?php

namespace App\Http\Controllers;
use App\Repositories\PublicPortal\RenderHTMLBannerRepository;
use App\Repositories\PublicPortal\IndexRepository;
use App\Repositories\PublicPortal\ProductsRepository;
use App\Repositories\PublicPortal\AthleteRepository;
use App\Repositories\PublicPortal\DentalPracticesRepository;
use Illuminate\Http\Request;
use App\Product;
use App\Lead;
use App\News;

class PublicPortalController extends Controller
{

    private $__globalValues;


    public function __construct() 
    {
        $this->__globalValues['productsForFooterMenu'] = ProductsRepository::fetchProductsForMenu();
    }


    public function index()
    {

        
        $RenderHTMLBannerRepository = new RenderHTMLBannerRepository();
        
        // dump( $RenderHTMLBannerRepository->activeBanner );
        
        // dump( $RenderHTMLBannerRepository->RenderProductsBannerHtml() );

        // dump( $RenderHTMLBannerRepository->activeBanner );
        // die();

        return view('publicportal.index', [
            'bannerProducts' => $RenderHTMLBannerRepository->RenderProductsBannerHtml(),
            'bannerAthletes' => $RenderHTMLBannerRepository->RenderAtheletesBannerHtml(),
            'testimonials' => AthleteRepository::fetchTestimonialsForHomepage(),
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }

    public function map()
    {
        return view('publicportal.map', [
            'pageLoadDentalPractices' => json_encode( DentalPracticesRepository::fetchPageLoadMapDentalPractices() ),
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }

    public function contactus()
    {

        return view('publicportal.contact', [
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }
    public function contactusSave( Request $request )
    {
        $input = $request->all();

        $lead = Lead::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'interest' => $input['interest'],
            'comments' => $input['comments']
        ]);

        if ( $lead )
        {
            $status = "Thank you for your interest, we will contact you shortly";
            return redirect()->back()->with('message', $status);
        }else {
            $status = "Opps, did not work. Please directly email at contactus@agilityguard.com";
            return redirect()->back()->with('warning', $status);
        }

        

        // return view('publicportal.contact', [
        //     'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        // ]);
    }

    public function testimonials()
    {

        return view('publicportal.testimonials', [
            'testimonials' => AthleteRepository::fetchTestimonials(),
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }

    
    public function about_news()
    {
        $news = News::select(['*'])
            ->get();
        
        return view('publicportal.about.news', [
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu'],
            'news' => $news
        ]);
    }
    public function about_agilityguard()
    {

        return view('publicportal.about.agilityguard', [
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }
    public function about_advisoryBoard()
    {

        return view('publicportal.about.advisoryBoard', [
            'productsForFooterMenu' => $this->__globalValues['productsForFooterMenu']
        ]);
    }
    public function about_ourExperts()
    {

        return view('publicportal.about.ourExperts', [
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

            $imagesFullPath;
            $images = json_decode($product->images, true);
            if( $images[0] )
            {
                $product->imagesFullPath = $_ENV['APP_URL'] .'storage/'. $images[0];
            }   
            

            




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
