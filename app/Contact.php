<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\DentalPractice;

class Contact extends Model
{
    public function productsId(){
        return $this->belongsToMany(Product::class)
            // ->using('App\ContactProduct')
            // ->withPivot([
            //     'created_by',
            //     'updated_by',
            //     'deleted_by'
            // ])
            ;
    }

    public function dentalPracticeId(){
        return $this->belongsTo(DentalPractice::class, 'dental_practice_id');
    }
}
