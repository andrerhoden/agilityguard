<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Repositories\DentistPortal\ProductsRepository;
use App\Repositories\DentistPortal\LabOrdersRepository;
use Illuminate\Support\Facades\Redirect;
use App\Repositories\DentistPortal\DentalPracticesRepository;

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
            header("Location: /dentist-portal/logout");
            die();
            // echo  redirect()->route('logout') ;
            // die('Logging out...');
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
            ->whereHas('dentalPracticeId', function($q){
                $q->where('dp_access', 1);
            })
            ->first();
        
        

        if (
            ( empty($contact) )
            || ( !Hash::check($input['strPassword'], $contact->Password ) ) 
        ){
            $request->session()->forget('dpUser');
        $request->session()->flush();
           return redirect('/dentist-portal')->with('warning', 'Login denied, please contact administrator.');
        }

        $this->__dpUser = $input;
        session(['dpUser' => $contact]);

        return redirect('/dentist-portal/orders');
    }

    public function logoutExecute(Request $request)
    {
        
        $request->session()->forget('dpUser');
        $request->session()->flush();
        
        return redirect('/dentist-portal')->with('message', 'Successfully signed out');
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
        if ( LabOrdersRepository::saveOrder( $input, session('dpUser') ) )
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
            ->with('consumer')
            ->where('dentalpractice_id', session('dpUser')->dentalPracticeId()->first()->id );
            
        return view('dentistportal.orders', [
            'orders' => $orders->get()
        ]);
    }
    public function orderDetails( \App\LabOrder $order )
    {
        $this->__chkDpUser();

        return view('dentistportal.orderDetails', [
            'order' => $order
        ]);

    }

    
    public function account()
    {
        $this->__chkDpUser();
        $dpUser = session('dpUser');
        
        return view('dentistportal.account',[
            'dentist' => $dpUser
        ]);
    }
    public function accountSave( Request $request )
    {
        $this->__chkDpUser();

        $input = $request->all();
        $result = DentalPracticesRepository::updateProfile( $input, session('dpUser') );

        if ( $result === true )
        {
            $status = "Account was successfully updated";
            return redirect('/dentist-portal/account')->with('message', $status);
        }else{            
            $status = $result;
            return redirect()->back()->with('warning', $status);
        }

        return;
    }
    
}
