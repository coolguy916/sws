<?php

namespace App\Http\Controllers;

use App\Models\Keunggulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

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
        $icon->storeAs('public/icon', $iconimage);

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

    public function update(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'teks' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
        ]);
    
        $slider = Keunggulan::find($request->keunggulan_id);
        $slider->judul = $request->judul;
        $slider->teks = $request->teks;
        $slider->status = $request->status;
    
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->storeAs('public/keunggulan', $imageName);
            $slider->image = $imageName;
        }
        if ($request->hasFile('icon')) {
            $iconimage = time().'.'.$request->icon->extension();  
            $request->icon->storeAs('public/icon', $iconimage);
            $slider->icon = $iconimage;
        }
    
        $slider->save();
    
        return response()->json(['status' => 'success']);
    }
    
    public function deletekeunggulan(Request $request)
    {
        try {
            $request->validate([
                'keunggulan_id' => 'required|exists:keunggulans,id',
            ]);
    
            $slider = Keunggulan::findOrFail($request->keunggulan_id);
    
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
