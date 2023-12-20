<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index() {
        $kontak=Kontak::paginate(5);
        return view('Admin.LandingPage.kontak', compact('kontak'));
    }

    public function create(Request $request) {
        $request->validate([
            'teks' => 'required',
            'status' => 'required',
            'link' => 'required', 
            'image' => 'required|image', 
        ], [
            'link.required' => 'Keterangan link harus harus di isi',
            'teks.required' => 'Keterangan Image harus di isi',
            'image.required' => 'Gambar harus diunggah',
            'image.image' => 'File harus berupa gambar',
        ]);

        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->storeAs('public/kontak', $imageName);

       
        $slider = new Kontak();
        $slider->image = $imageName;
        $slider->link = $request->link;
        $slider->teks = $request->teks;
        $slider->status = $request->status;
        $slider->save();  
    
        return response()->json([
            'status' => 'success',
        ]);
    }
}
