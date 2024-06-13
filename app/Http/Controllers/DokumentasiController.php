<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

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

    public function update(Request $request)
    {
        $request->validate([
            'teks' => 'required',
            'judul' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
        ]);
    
        $slider = Dokumentasi::find($request->docs_id);
        $slider->teks = $request->teks;
        $slider->judul = $request->judul;
        $slider->status = $request->status;
    
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->storeAs('public/dokumentasi', $imageName);
            $slider->image = $imageName;
        }
    
        $slider->save();
    
        return response()->json(['status' => 'success']);
    }

    public function deletedokumentasi(Request $request)
{
    try {
        $request->validate([
            'docs_id' => 'required|exists:dokumentasis,id',
        ]);

        $slider = Dokumentasi::findOrFail($request->docs_id);

        if ($slider->image && Storage::exists('public/fitur'.$slider->image)) {
            Storage::delete('public/fitur'.$slider->image);
        }
       
        $slider->delete();

        return response()->json(['status' => 'success', 'message' => 'Slider has been deleted.']);
    } catch (\Exception $e) {
        return response()->json(['status' => 'error', 'message' => 'Failed to delete the slider.', 'error' => $e->getMessage()]);
    }
}
}

   

