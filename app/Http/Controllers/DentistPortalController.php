<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Repositories\DentistPortal\ProductsRepository;

class DentistPortalController extends Controller
{

    private $__globalValues;
    private $__dpUser;

    public function __construct() 
    {
        
        // if ( empty( session('dpUser') ) )
        // {
        //     return redirect('/dentist-portal');
        // }
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
        
        

        if (
            ( empty($contact) )
            || ( !Hash::check($input['strPassword'], $contact->Password ) ) 
        ){
           return redirect('/dentist-portal/logout');
        }

        $this->__dpUser = $input;
        session(['dpUser' => $contact]);

        return redirect('/dentist-portal/orders');
    }

    public function createOrderSave( Request $request )
    {
        $input = $request->all();
        dump( $input );
        die();
    }

    public function logoutExecute(Request $request)
    {
        $request->session()->forget('dpUser');
        $request->session()->flush();
        
        return redirect('/dentist-portal')->with('success', 'Logout');
    }

    

    public function createOrder()
    {        
        

        $labs = \App\User::select()
            ->where('role_id', 3)
            ->get();
            
        return view('dentistportal.createOrder', [
            'dentistPortal' => session('dpUser')->dentalPracticeId()->first(),
            'labs'      => $labs,
            'products'  => ProductsRepository::fetchProductsForDropDown()
        ]);
    }

    public function orders()
    {        
        $orders = \App\LabOrder::select()
            ->with('products')
            ->with('users')
            ->with('consumer');
            
        dump( $orders->get()->toArray() );

        return view('dentistportal.orders', [
            'orders' => $orders->get()
        ]);
    }

    
    public function account()
    {
        return view('dentistportal.account');
    }
    
}
