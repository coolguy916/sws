<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

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

public function update(Request $request){
    $request->validate (
        [
            'judul'=>'required',
            'teks'=>'required',
        ]);

        $testimonial= Testimonial::find($request->up_id);
        Testimonial::where('id',$request->up_id)->update([
            'judul'=>$request->judul,
            'teks' => $request->teks,
        ]);

    return response()->json([
        'status'=>'success',
    ]);

}

}
