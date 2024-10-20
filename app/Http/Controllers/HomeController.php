<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function halaman1()
    {
        return view('halaman1');
    }

    public function halaman2()
    {
        return view('halaman2');
    }
}
