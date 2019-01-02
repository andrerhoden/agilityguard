<?php

namespace App\Repositories\DentistPortal;

use App\Consumer;
use App\LabOrder;
use Illuminate\Support\Facades\DB;

class LabOrdersRepository 
{
    
    public static function saveOrder( $input )
    {
        
        
        $consumer = Consumer::create([
            'last_name' => $input['last_name'],
            'first_name' => $input['first_name'],
            'email' => $input['email'],
            'address' => $input['address'],
            'city' => $input['city'],
            'prov' => $input['prov'],
            'postal' => $input['postal'],
            'country' => $input['country'],
            'phone_number' => $input['phone_number'],
            'sports' => $input['sports'],
            'comments' => $input['comments']    
        ]);

        if ( $consumer )
        {
            $labOrder = LabOrder::create([
                'consumer_id' => $consumer->id,
                'shipping_address' => $input['shipToText'],
                'status' => 'pending_payment',
                'lab_id' => $input['lab'],
            ]);
            
            
            if ( $labOrder )
            {
                foreach( $input['product'] as $prodKey => $product )
                {
                    DB::table('laborder_product')->insert([
                        'lab_order_id' => $labOrder->id,
                        'product_id' => $input['product'][$prodKey],
                        'guard_type' => $input['product-type'][$prodKey],
                        'colour' => $input['product-color'][$prodKey]
                    ]);
                }

                return true;
            }
            
        }
        
        return false;
    }

   

}
