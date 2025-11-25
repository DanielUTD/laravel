<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $name = "John";
        return view('home', compact('name'));
    }
}