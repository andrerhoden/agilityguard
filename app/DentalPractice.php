<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class DentalPractice extends Model
{
    protected $table = 'DentalPractices';


    protected $fillable = ['Name', 'EmailAddress', 'Description', 'Lat', 'Long', 'Address', 'City', 'Province', 'Country', 'Postal_code', 'Website', 'phone_office'];
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
