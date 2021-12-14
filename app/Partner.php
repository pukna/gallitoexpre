<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = ['document', 'name', 'email', 'phone'];

    public function vehicles()
    {
        return $this->hasMany('App\Vehicle');
    }
}

