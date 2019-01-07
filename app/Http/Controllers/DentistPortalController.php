<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Repositories\DentistPortal\ProductsRepository;
use App\Repositories\DentistPortal\LabOrdersRepository;
use Illuminate\Support\Facades\Redirect;

class DentistPortalController extends Controller
{

    private $__globalValues;
    private $__dpUser;

    public function __construct() 
    {
    }

    private function __chkDpUser()
    {
        if ( empty( session('dpUser') ) )
        {            
            return redirect('/dentist-portal/logout');
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

    public function logoutExecute(Request $request)
    {
        $request->session()->forget('dpUser');
        $request->session()->flush();
        
        return redirect('/dentist-portal')->with('success', 'Logout');
    }

    

    public function createOrder()
    {        
        $this->__chkDpUser();

        $labs = \App\User::select()
            ->where('role_id', 3)
            ->get();
            
        return view('dentistportal.createOrder', [
            'dentistPortal' => session('dpUser')->dentalPracticeId()->first(),
            'labs'      => $labs,
            'products'  => ProductsRepository::fetchProductsForDropDown()
        ]);
    }
    public function createOrderSave( Request $request )
    {
        
        $input = $request->all();
        if ( LabOrdersRepository::saveOrder( $input ) )
        {
            $status = "Order was successfully created";
            return redirect('/dentist-portal/orders')->with('message', $status);
        }

        $status = "ERROR: Order was NOT created";
        return redirect()->back()->with('warning', $status);

        return;
    }


    public function orders()
    {        
        $this->__chkDpUser();

        $orders = \App\LabOrder::select()
            ->with('products')
            ->with('users')
            ->with('consumer');
            
        return view('dentistportal.orders', [
            'orders' => $orders->get()
        ]);
    }

    
    public function account()
    {
        $this->__chkDpUser();

        return view('dentistportal.account');
    }
    
}
