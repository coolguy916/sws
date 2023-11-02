<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = ['title' => 'index']; // Your data to pass to the view
        return view('Admin.Home.index', $data); // Path to your Blade component
    }

    public function create()
    {
        return view('Admin.Home.data_user');
    }

    public function form()
    {
        $data = ['title' => 'form']; // Your data to pass to the view
        return view('Admin.Home.form', $data); // Path to your Blade component
    }
}
