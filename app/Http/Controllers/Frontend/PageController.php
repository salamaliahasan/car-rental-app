<?php


namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    // Display the home page
    public function home()
    {
        return view('frontend.home');
    }

    // Display the about page
    public function about()
    {
        return view('frontend.about');
    }

    // Display the contact page
    public function contact()
    {
        return view('frontend.contact');
    }

    // Login Page
    public function login()
    {
        return view('frontend.login');
    }

    // Signup Page
    public function signup()
    {
        return view('frontend.signup');
    }
}

