<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Consumer extends Model
{
    protected $fillable = ['last_name', 'first_name', 'email', 'address', 'city', 'prov', 'postal', 'country', 'phone_number', 'sports', 'comments', 'marketing_feedback', 'wear_frequency'];
}
