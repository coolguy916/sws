<?php

namespace App\Http\Controllers;

use App\Models\Deskripsi;
use App\Models\Dokumentasi;
use App\Models\Fitur;
use App\Models\Footer;
use App\Models\Keunggulan;
use App\Models\Kontak;
use App\Models\page;
use App\Models\price;
use App\Models\slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index() {
    $slider = Slider::where('status', 1)->get();
    $deskripsi= Deskripsi::all();
    $fitur = Fitur::all();
    $keunggulan = Keunggulan::where('status', 1)->get();
    $dokumentasi = Dokumentasi::where('status', 1)->get();
    $kontak = Kontak::first();    
    $footers = Footer::all();    
    $testimoni= Testimonial::all();
    $pages= page::all();
    $prices= price::all();

    return view('landing-page.landing', compact('slider','deskripsi','dokumentasi','fitur','keunggulan','kontak','footers','testimoni','pages','prices'));
    }
}
