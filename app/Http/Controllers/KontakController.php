<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

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

    public function update(Request $request)
    {
        $request->validate([
            'link' => 'required',
            'teks' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
        ]);
    
        $slider = Kontak::find($request->kontak_id);
        $slider->teks = $request->teks;
        $slider->link = $request->link;
        $slider->status = $request->status;
    
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->storeAs('public/kontak', $imageName);
            $slider->image = $imageName;
        }
    
        $slider->save();
    
        return response()->json(['status' => 'success']);
    }

    public function deletekontak(Request $request)
{
    try {
        $request->validate([
            'kontak_id' => 'required|exists:kontaks,id',
        ]);

        $slider = kontak::findOrFail($request->kontak_id);

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
