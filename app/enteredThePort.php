<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enteredThePort extends Model
{
    protected $fillable = ['vSeguro', 'tSeguto', 'VEnteretPorts','userEnterPort','passEnterPort','vehicles_id','drive_id'];
    public function vehicle()
    {
        return $this->belongsTo('App\Vehicle');
    }
    public function driver()
    {
        return $this->belongsTo('App\Driver');
    }

}
