<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index($name){
        return view('contact',[
            'valeur' => $name
        ]);
        
    }
    public function article(){
        return  view('article');
    }
    
}
