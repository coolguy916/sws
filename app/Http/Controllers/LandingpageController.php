<?php

namespace App\Http\Controllers;

use App\Models\Deskripsi;
use App\Models\Dokumentasi;
use App\Models\Fitur;
use App\Models\Footer;
use App\Models\Keunggulan;
use App\Models\Kontak;
use App\Models\slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index() {
    $slider = Slider::where('status', 1)->get();
    $deskripsi= Deskripsi::all();
    $fitur = Fitur::where('status', 1)->get();
    $keunggulan = Keunggulan::where('status', 1)->get();
    $dokumentasi = Dokumentasi::where('status', 1)->get();
    $kontak = Kontak::where('status', 1)->get();
    $footer = Footer::where('status', 1)->get();
    $testimoni= Testimonial::all();

    return view('landing-page.index', compact('slider','deskripsi','dokumentasi','fitur','keunggulan','kontak','footer','testimoni'));
    }
}
