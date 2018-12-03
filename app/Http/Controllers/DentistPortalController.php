<?php

namespace App\Http\Controllers;
use App\Repositories\PublicPortal\IndexRepository;
use App\Repositories\PublicPortal\ProductsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DentistPortalController extends Controller
{

    private $__globalValues;
    private $__dpUser;

    public function __construct() 
    {
        
        if ( empty( session('dpUser') ) )
        {
            return redirect('/dentist-portal');
        }
    }

    public function login()
    {
        if ( !empty( session('dpUser') ) )
        {
            return redirect('/dentist-portal/orders');
        }

        return view('dentistportal.login');
    }

    public function loginExecute( Request $request )
    {
        $input = $request->all();

        $contact = \App\Contact::select()
            ->where('EmailAddress', $input['Email'])  
            ->first();
            
        if ( !Hash::check($input['strPassword'], $contact->Password ) ) 
        {
           return redirect('/dentist-portal/logout');
        }

        $this->__dpUser = $input;
        session(['dpUser' => $contact]);

        return redirect('/dentist-portal/orders');
    }

    public function logoutExecute(Request $request)
    {
        $request->session()->forget('dpUser');
        $request->session()->flush();
        
        return redirect('/dentist-portal')->with('success', 'Logout');
    }

    

    public function createOrder()
    {        
        return view('dentistportal.createOrder');
    }

    public function orders()
    {        
        return view('dentistportal.orders');
    }

    public function account()
    {
        return view('dentistportal.account');
    }
    
}
