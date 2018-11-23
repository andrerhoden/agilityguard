<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\DentalPractice;

class Contact extends Model
{
    public function productsId(){
        return $this->belongsTo(Product::class, 'products_id');
    }

    public function dentalPracticeId(){
        return $this->belongsTo(DentalPractice::class, 'dental_practice_id');
    }
}
