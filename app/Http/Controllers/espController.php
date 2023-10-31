<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class espController extends Controller
{
    public function index()
    {
        $data = ['title' => 'index']; // Your data to pass to the view
        return view('User.esp_control.index', $data); // Path to your Blade component
    }

    public function form()
    {
        $data = ['title' => 'form']; // Your data to pass to the view
        return view('User.esp_control.form', $data); // Path to your Blade component
    }
}
