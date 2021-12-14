<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    protected $fillable = ['plate', 'measures', 'enrollment',"partner_id"];
    public function partner()
    {
        return $this->belongsTo('App\Partner');
    }
    public function enteredThePort()
    {
        return $this->hasMany('App\enteredThePort');
    }
    public function freightreport()
    {
        return $this->hasMany('App\Freightreport');
    }
}
