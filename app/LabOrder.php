<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class LabOrder extends Model
{
    protected $table = 'LabOrders';

    protected $fillable = ['shipping_address', 'status', 'consumer_id', 'lab_id', 'subtotal', 'taxes', 'total', 'dentalpractice_id', 'contact_id'];
    
    public function users()
    {   // LAB //
        /////////
        return $this->belongsTo( User::class, 'lab_id', 'id' );
    }

    public function consumer(){
        return $this->belongsTo(Consumer::class);
    }

    public function dentalpractice_id(){
        return $this->belongsTo(DentalPractice::class, 'dentalpractice_id');
    }

    public function dentist_id(){
        return $this->belongsTo(Contact::class, 'contact_id');
    }

    public function products(){
        return $this->belongsToMany( Product::class, 'laborder_product' ) 
            ->withPivot([
                'guard_type',
                'colour'
            ])
            ;
    }
}
