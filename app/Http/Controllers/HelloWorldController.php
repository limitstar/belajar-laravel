<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function index()
    {
        return "Selamat Belajar Laravel 12";
    }

    public function ambilFile()
    {
        return view ('ambilfile');
    }
}
