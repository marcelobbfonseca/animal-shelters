<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        # code...
        $users = App\User::all();

        return view('welcome', [
            'foo'=> 'bar',
            'users' => $users
        ]);

    }

    public function contact(){
        $users = App\User::all();
        return view('contact', compact('users'));
    }


    
}
