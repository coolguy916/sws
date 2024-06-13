<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class TestimonialController extends Controller
{
public function index() {
    $testimonial=Testimonial::paginate(5);
    return view ('Admin.LandingPage.testimonial' , compact('testimonial'));
}

public function create(Request $request) {
    $request->validate([
        'teks' => 'required',
       
        'judul' => 'required', 
       
    ], [
        'judul.required' => 'Keterangan link harus harus di isi',
        'teks.required' => 'Keterangan Image harus di isi',
        
    ]);

   

   
    $slider = new Testimonial();
    $slider->judul = $request->judul;
    $slider->teks = $request->teks;
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
       
    ]);

    $slider = Testimonial::find($request->testimoni_id);
    $slider->teks = $request->teks;
    $slider->judul = $request->judul;
    $slider->save();

    return response()->json(['status' => 'success']);
}

public function delete(Request $request)
{
    try {
        $request->validate([
            'testimoni_id' => 'required|exists:testimonials,id',
        ]);

        $slider = Testimonial::findOrFail($request->testimoni_id);


       
        $slider->delete();

        return response()->json(['status' => 'success', 'message' => 'Slider has been deleted.']);
    } catch (\Exception $e) {
        return response()->json(['status' => 'error', 'message' => 'Failed to delete the slider.', 'error' => $e->getMessage()]);
    }
}

}
