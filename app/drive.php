<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class drive extends Model
{
    protected $fillable = ['document', 'name', 'email', 'phone','licenseType'];
    public function enteredThePort()
    {
        return $this->hasMany('App\enteredThePort');
    }
    public function freightreport()
    {
        return $this->hasMany('App\Freightreport');
    }
}
