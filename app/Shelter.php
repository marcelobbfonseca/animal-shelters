<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelter extends Model
{
    // App\Shelter::find(1)->animals;
    public function animals(){
        return $this->hasMany('\App\Animal');
    }
    protected $guarded = [];
}
