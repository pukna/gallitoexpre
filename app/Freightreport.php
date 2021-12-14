<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freightreport extends Model
{
    public function drive()
    {
        return $this->belongsTo('App\Drive');
    }
    public function vehicle()
    {
        return $this->belongsTo('App\Vehicle');
    }
    public function invice()
    {
        return $this->belongsTo('App\Invoice');
    }
}
