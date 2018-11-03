<?php

namespace App\Http\Controllers;
use App\Repositories\PublicPortal\IndexRepository;
use App\Repositories\PublicPortal\ProductsRepository;


class DentistPortalController extends Controller
{

    private $__globalValues;
    private $__dpUser;

    public function __construct() 
    {
        // $this->__globalValues['productsForFooterMenu'] = ProductsRepository::fetchProductsForMenu();

        

        if ( empty( session('dpUser') ) )
        {
            return redirect('/dentist-portal');

        }else {
            $this->__dpUser = session('dpUser');
            dd( $this->__dpUser );
        }

    }


    public function login()
    {

        return view('dentistportal.login');
    }

    public function dashboard()
    {
        
         //         return view('dentistportal.dashboard', [
        //             'dpUser' => $dpUser
        //         ]); 

        return view('dentistportal.dashboard');
    }
}
