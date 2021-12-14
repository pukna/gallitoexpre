<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['document', 'name', 'email', 'phone','client_id'];
    public function contact()
    {
        return $this->hasMany('App\Contact');
    }
}
