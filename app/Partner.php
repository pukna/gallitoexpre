<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partner extends Model
{
    protected $fillable = ['document', 'name', 'mail', 'phone'];
}
