<?php

namespace App\Http\Controllers\Frantend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.pages.home.index'); 
    }

    public function cart(){
        return view('frontend.pages.cart.index'); 
    }

    public function checkout(){
        return view('frontend.pages.checkout.index'); 
    }
}
