<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shelter;

class ShelterController extends Controller
{
    public function index(){
        $shelters = Shelter::all();
        return $shelters;
    }

    public function show($id){
        $shelter = Shelter::find($id);
        $shelter->animals;
        return $shelter;
    }
}
