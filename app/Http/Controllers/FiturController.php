<?php

namespace App\Http\Controllers;

use App\Models\Fitur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

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

    public function update(Request $request)
    {
        $request->validate([
            'teks' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
        ]);
    
        $slider = Fitur::find($request->fitur_id);
        $slider->teks = $request->teks;
        $slider->status = $request->status;
    
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->storeAs('public/fitur', $imageName);
            $slider->image = $imageName;
        }
    
        $slider->save();
    
        return response()->json(['status' => 'success']);
    }

    public function deletefitur(Request $request)
{
    try {
        $request->validate([
            'fitur_id' => 'required|exists:fiturs,id',
        ]);

        $slider = fitur::findOrFail($request->fitur_id);

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
