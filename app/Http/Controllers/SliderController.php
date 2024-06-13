<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class SliderController extends Controller
{
    public function index(Request $request) {
       $slider= Slider::paginate(5);

    return view('Admin.landingpage.slider', compact('slider')); 
    }

    public function create(Request $request) {
        $request->validate([
            'body' => 'required',
            'sub' => 'required',
            'status' => 'required',
            'image' => 'required|image', 
        ], [
            'body.required' => 'Keterangan Image harus di isi',
            'sub.required' => 'Keterangan judul harus di isi',
            'image.required' => 'Gambar harus diunggah',
            'image.image' => 'File harus berupa gambar',
        ]);

        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->storeAs('public/imageslider', $imageName);

        $slider = new Slider();
        $slider->image = $imageName;
        $slider->body = $request->body;
        $slider->sub = $request->sub;
        $slider->status = $request->status;
        $slider->save();  
    
        return response()->json([
            'status' => 'success',
        ]);
    }

    public function update(Request $request)
{
    $request->validate([
        'body' => 'required',
        'sub' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'status' => 'required',
    ]);

    $slider = Slider::find($request->slider_id);
    $slider->body = $request->body;
    $slider->sub = $request->sub;
    $slider->status = $request->status;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();  
        $request->image->storeAs('public/imageslider', $imageName);
        $slider->image = $imageName;
    }

    $slider->save();

    return response()->json(['status' => 'success']);
}

public function deleteSlider(Request $request)
{
    try {
        $request->validate([
            'slider_id' => 'required|exists:sliders,id',
        ]);

        $slider = Slider::findOrFail($request->slider_id);

        if ($slider->image && Storage::exists('public/imageslider'.$slider->image)) {
            Storage::delete('public/imageslider'.$slider->image);
        }
       
        $slider->delete();

        return response()->json(['status' => 'success', 'message' => 'Slider has been deleted.']);
    } catch (\Exception $e) {
        return response()->json(['status' => 'error', 'message' => 'Failed to delete the slider.', 'error' => $e->getMessage()]);
    }
}

    
}
