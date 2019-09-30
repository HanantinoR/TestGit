<?php
namespace App\Http\Controllers;
use illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome() 
    {
        return view('welcome');
    }
    public function about() 
    {
        return view('about');
    }



}


