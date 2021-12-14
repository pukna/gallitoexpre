<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class invoice extends Model
{
    protected $fillable = [
        'detail', 'advance', 'balance',"total",
    ];
    public static function boot()
    {
        parent::boot();
        static::creating(function ($invoice) {
            $invoice->user_id = Auth::id();
        });
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function freightreport()
    {
        return $this->hasMany('App\Freigreport');
    }
}
