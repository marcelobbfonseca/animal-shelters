<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        # code...
        return view('welcome');

    }

    public function contact(){
        $users = \App\User::all();
        return view('contact', compact('users'));
    }


    
}
