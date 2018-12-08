<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class LabOrder extends Model
{
    protected $table = 'LabOrders';

    public function consumer(){
        return $this->belongsTo(Consumer::class);
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
