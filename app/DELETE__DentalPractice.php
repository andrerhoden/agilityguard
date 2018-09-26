<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class DELETE__DentalPractice extends Model
{
    protected $table = 'DentalPractices';

    public $additional_attributes = ['Name'];

    public function getNameAttribute()
    {
        return "{$this->Name}";
    }

}
