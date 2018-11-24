<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class DentalPractice extends Model
{
    protected $table = 'DentalPractices';

    // protected $fillable = ['Name', 'BillingAdress', 'EmailAddress', 'Description', 'Lat', 'Long'];
    // public $additional_attributes = ['Name'];

    // public function getNameAttribute()
    // {
    //     return "{$this->Name}";
    // }

    public function Contacts()
    {
        return $this->hasMany('App\Contact', 'dental_practice_id', 'id');
    }

}
