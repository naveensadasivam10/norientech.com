<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function products()
    {
        return view('pages.products');
    }

    public function tirupaturLanding()
    {
        return view('pages.tirupatur-landing');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
