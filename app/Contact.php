<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['room', 'place', 'phone_contact', 'pay_day', 'type_change'];
}
