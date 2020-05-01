<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("HomePage.index");
    }
    public function services()
    {
        return view("HomePage.services");
    }
    public function portfolio()
    {
        return view('HomePage.portfolio');
    }
}
