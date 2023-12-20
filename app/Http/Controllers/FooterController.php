<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index() {
        $footer=Footer::paginate(5);
        return view('Admin.LandingPage.footer', compact('footer'));
    }

    public function create(Request $request) {
        $request->validate([
            'instagram' => 'required',
            'yotube' => 'required', 
        ], [
            'instagram.required' => 'Keterangan link harus harus di isi',
            'yotube.required' => 'Keterangan Image harus di isi',
        ]);
       
        $slider = new Footer();
        $slider->instagram = $request->instagram;
        $slider->yotube = $request->yotube;
        $slider->save();  
    
        return response()->json([
            'status' => 'success',
        ]);
    }
}
