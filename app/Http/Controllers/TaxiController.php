<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxiController extends Controller
{
    public function  index(){
        return view('Taxi.index');
    }
    public function  Home(){
        return view('Taxi.Home');
    }
    public function  pricing(){
        return view('Taxi.pricing');
    }
    public function  contact(){
        return view('Taxi.contact');
    }
    public function  account(){
        return view('Taxi.account');
    }
    public function  passe(){
        return view('Taxi.passe');
    }
    
    
}
