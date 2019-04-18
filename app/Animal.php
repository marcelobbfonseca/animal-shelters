<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    // App\Animal::find(1)->Shelter;
    public function shelter(){
        return $this->belongsTo('App\Shelter');
    }
}
