<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use Illuminate\Http\Request;

class DokumentasiController extends Controller
{
    public function index() {
        $dokumentasi= Dokumentasi::paginate(5);
        return view('Admin.LandingPage.dokumentasi', compact('dokumentasi'));
    }

    public function create(Request $request) {
        $request->validate([
            'judul' => 'required',
            'teks' => 'required',
            'status' => 'required',
            'image' => 'required|image', 
        ], [
            'judul.required' => 'Keterangan Image harus di isi',
            'teks.required' => 'Keterangan Image harus di isi',
            'image.required' => 'Gambar harus diunggah',
            'image.image' => 'File harus berupa gambar',
        ]);

        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->storeAs('public/dokumentasi', $imageName);
        $dokumentasi = new Dokumentasi();
        $dokumentasi->image = $imageName;
        $dokumentasi->judul = $request->judul;
        $dokumentasi->teks = $request->teks;
        $dokumentasi->status = $request->status;
        $dokumentasi->save();  
    
        return response()->json([
            'status' => 'success',
        ]);
    }
}
