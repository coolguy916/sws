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
            'icon' => 'required', 
        ], [
            'judul.required' => 'Keterangan Image harus di isi',
            'teks.required' => 'Keterangan Image harus di isi',
            'image.required' => 'Gambar harus diunggah',
            'icon.required' => 'icon harus diunggah',
        ]);

       

        $slider = new Keunggulan();
        $slider->icon = $request->icon;
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
            'icon' => 'required',
            'status' => 'required',
        ]);
    
        $slider = Keunggulan::find($request->keunggulan_id);
        $slider->judul = $request->judul;
        $slider->teks = $request->teks;
        $slider->icon = $request->icon;
        $slider->status = $request->status;
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
           
            $slider->delete();
    
            return response()->json(['status' => 'success', 'message' => 'Slider has been deleted.']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Failed to delete the slider.', 'error' => $e->getMessage()]);
        }
    }
        
}
