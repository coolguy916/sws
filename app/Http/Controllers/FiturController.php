<?php

namespace App\Http\Controllers;

use App\Models\Fitur;
use Illuminate\Http\Request;

class FiturController extends Controller
{
    public function index() {
    $fitur=Fitur::paginate(5);

    return view('Admin.LandingPage.fitur' , compact('fitur'));
    }

    public function create(Request $request) {
        $request->validate([
            'teks' => 'required',
            'status' => 'required',
            'image' => 'required|image', 
        ], [
            'teks.required' => 'Keterangan Image harus di isi',
            'image.required' => 'Gambar harus diunggah',
            'image.image' => 'File harus berupa gambar',
        ]);

        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->storeAs('public/fitur', $imageName);

        $slider = new Fitur();
        $slider->image = $imageName;
        $slider->teks = $request->teks;
        $slider->status = $request->status;
        $slider->save();  
    
        return response()->json([
            'status' => 'success',
        ]);
    }
    
}
