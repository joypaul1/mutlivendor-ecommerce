<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function singleProduct()
    {
        return view('frontend.pages.singleProduct');
    }
    public function allProduct()
    {
        return view('frontend.pages.allProduct');
    }
    public function cart()
    {
        return view('frontend.pages.cart');
    }
    public function checkout()
    {
        return view('frontend.pages.checkout');
    }
    public function myAccount()
    {
        return view('frontend.pages.myAccount');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function login()
    {
        return view('frontend.pages.login');
    }
    public function registation()
    {
        return view('frontend.pages.registation');
    }

    public function aboutus()
    {
        return view('frontend.pages.aboutus');
    }
    public function blog()
    {
        return view('frontend.pages.blog');
    }

    public function protected()
    {
        return view('frontend.protected');
    }
}
