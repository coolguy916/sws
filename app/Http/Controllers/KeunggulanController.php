<?php

namespace App\Http\Controllers;

use App\Models\Keunggulan;
use Illuminate\Http\Request;

class KeunggulanController extends Controller
{
    public function index(){
        $keunggulan=Keunggulan::paginate(5);
        return view ('Admin.LandingPage.keunggulan', compact('keunggulan'));
    }

    public function create(Request $request) {
        $request->validate([
            'judul' => 'required',
            'teks' => 'required',
            'status' => 'required',
            'icon' => 'required|image', 
            'image' => 'required|image', 
        ], [
            'judul.required' => 'Keterangan Image harus di isi',
            'teks.required' => 'Keterangan Image harus di isi',
            'image.required' => 'Gambar harus diunggah',
            'icon.required' => 'Gambar harus diunggah',
            'icon.image' => 'File harus berupa gambar',
            'image.image' => 'File harus berupa gambar',
        ]);

        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->storeAs('public/keunggulan', $imageName);

        $icon = $request->file('icon');
        $iconimage = $image->hashName();
        $icon->storeAs('public/keunggulan', $iconimage);

        $slider = new Keunggulan();
        $slider->image = $imageName;
        $slider->icon = $iconimage;
        $slider->judul = $request->judul;
        $slider->teks = $request->teks;
        $slider->status = $request->status;
        $slider->save();  
    
        return response()->json([
            'status' => 'success',
        ]);
    }
    
}
