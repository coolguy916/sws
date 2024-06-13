<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class FooterController extends Controller
{
    public function index() {
        $footer=Footer::paginate(5);
        return view('Admin.LandingPage.footer', compact('footer'));
    }

    public function create(Request $request) {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'youtube' => 'required',
            'instagram' => 'required',
            'status' => 'required',
            'image' => 'required|image', 
        ], [
            'judul.required' => 'Keterangan Image harus di isi',
            'deskripsi.required' => 'Keterangan Image harus di isi',
            'alamat.required' => 'Keterangan Image harus di isi',
            'email.required' => 'Keterangan Image harus di isi',
            'phone.required' => 'Keterangan Image harus di isi',
            'youtube.required' => 'Keterangan Image harus di isi',
            'instagram.required' => 'Keterangan Image harus di isi',
            'image.required' => 'Gambar harus diunggah',
            'image.image' => 'File harus berupa gambar',
        ]);

        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->storeAs('public/logo', $imageName);

        $slider = new Footer();
        $slider->image = $imageName;
        $slider->judul = $request->judul;
        $slider->deskripsi = $request->deskripsi;
        $slider->alamat = $request->alamat;
        $slider->email = $request->email;
        $slider->phone = $request->phone;
        $slider->youtube = $request->youtube;
        $slider->instagram = $request->instagram;
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
            'deskripsi' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'youtube' => 'required',
            'instagram' => 'required',
            'status' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'judul.required' => 'Keterangan Image harus di isi',
            'deskripsi.required' => 'Keterangan Image harus di isi',
            'alamat.required' => 'Keterangan Image harus di isi',
            'email.required' => 'Keterangan Image harus di isi',
            'phone.required' => 'Keterangan Image harus di isi',
            'youtube.required' => 'Keterangan Image harus di isi',
            'instagram.required' => 'Keterangan Image harus di isi',
            'image.required' => 'Gambar harus diunggah',
            'image.image' => 'File harus berupa gambar',
        ]);
    
        $slider = Footer::find($request->footer_id);
        $slider->judul = $request->judul;
        $slider->deskripsi = $request->deskripsi;
        $slider->alamat = $request->alamat;
        $slider->email = $request->email;
        $slider->phone = $request->phone;
        $slider->youtube = $request->youtube;
        $slider->instagram = $request->instagram;
        $slider->status = $request->status;
        $slider->save();  

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->storeAs('public/logo', $imageName);
            $slider->image = $imageName;
        }
    
        $slider->save();
    
        return response()->json(['status' => 'success']);
    }

    public function delete(Request $request)
    {
        try {
            $request->validate([
                'footer_id' => 'required|exists:footers,id',
            ]);
    
            $slider = footer::findOrFail($request->footer_id);
    
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
