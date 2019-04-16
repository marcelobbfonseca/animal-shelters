<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        # code...
        return view('welcome', [
            'foo'=> 'bar'
        ]);
    }

    public function contact(){
        return view('contact');
    }


    
}
