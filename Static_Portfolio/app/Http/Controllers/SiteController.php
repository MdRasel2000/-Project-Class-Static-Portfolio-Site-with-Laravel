<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function homePage()
    {     
           $data = [

               'name'=>'Md Rasel',
               'profession'=>'Laravel Developer'
           ];

          return view('home', compact('data'));
    }

    public function aboutPage()
    {
          return view('about');
    }

    public function contactPage()
    {
          return view('contact');
    }

    public function servicesPage()
    {
          return view('services');
    }

    public function portfolioPage()
    {
          return view('portfolio');
    }
}
