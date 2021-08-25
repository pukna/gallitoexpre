<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class drive extends Model
{
    protected $fillable = ['document', 'name', 'mail', 'phone','licenseTipe'];
}
