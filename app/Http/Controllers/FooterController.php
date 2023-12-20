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
            'judul' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'youtube' => 'required',
            'instagram' => 'required',
            'status' => 'required',
            'image' => 'required|image', 
        ], [
            'judul.required' => 'Keterangan Image harus di isi',
            'deskripsi.required' => 'Keterangan Image harus di isi',
            'alamat.required' => 'Keterangan Image harus di isi',
            'email.required' => 'Keterangan Image harus di isi',
            'phone.required' => 'Keterangan Image harus di isi',
            'youtube.required' => 'Keterangan Image harus di isi',
            'instagram.required' => 'Keterangan Image harus di isi',
            'image.required' => 'Gambar harus diunggah',
            'image.image' => 'File harus berupa gambar',
        ]);

        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->storeAs('public/logo', $imageName);

        $slider = new Footer();
        $slider->image = $imageName;
        $slider->judul = $request->judul;
        $slider->deskripsi = $request->deskripsi;
        $slider->alamat = $request->alamat;
        $slider->email = $request->email;
        $slider->phone = $request->phone;
        $slider->youtube = $request->youtube;
        $slider->instagram = $request->instagram;
        $slider->status = $request->status;
        $slider->save();  
    
        return response()->json([
            'status' => 'success',
        ]);
    }
}
