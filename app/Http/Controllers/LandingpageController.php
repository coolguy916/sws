<?php

namespace App\Http\Controllers;

use App\Models\Deskripsi;
use App\Models\Fitur;
use App\Models\Keunggulan;
use App\Models\Kontak;
use App\Models\slider;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index() {
    $slider = Slider::where('status', 1)->get();
    $deskripsi= Deskripsi::all();
    $fitur = Fitur::where('status', 1)->get();
    $keunggulan = Keunggulan::where('status', 1)->get();
    $kontak = Kontak::where('status', 1)->get();

    return view('landing-page.index', compact('slider','deskripsi','fitur','keunggulan','kontak'));
    }
}
