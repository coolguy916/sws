<?php

namespace App\Http\Controllers;

use App\Models\Fitur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class FiturController extends Controller
{
    public function index() {
        $fitur = Fitur::all();

    return view('Admin.LandingPage.fitur' , compact('fitur'));
    }

    
   
    public function create()
    {
        return view('fitur.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul.*' => 'nullable|string|max:255',
            'deskripsi.*' => 'nullable|string|max:255',
            'icon.*' => 'nullable|string|max:255',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        $fitur = new Fitur();
        $fitur->image = $imagePath;
        $fitur->judul = json_encode(array_slice($request->judul, 0, 6));
        $fitur->deskripsi = json_encode(array_slice($request->deskripsi, 0, 6));
        $fitur->icon = json_encode(array_slice($request->icon, 0, 6));
        $fitur->save();

        return redirect()->route('fitur.index')->with('success', 'Fitur created successfully.');
    }

    public function edit(Fitur $fitur)
    {
        return view('fitur.edit', compact('fitur'));
    }

    public function update(Request $request, Fitur $fitur)
    {
        $request->validate([
            'judul.*' => 'nullable|string|max:255',
            'deskripsi.*' => 'nullable|string|max:255',
            'icon.*' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $fitur->image = $imagePath;
        }

        
        $fitur->judul = json_encode(array_slice($request->judul, 0, 6));
        $fitur->deskripsi = json_encode(array_slice($request->deskripsi, 0, 6));
        $fitur->icon = json_encode(array_slice($request->icon, 0, 6));
        $fitur->save();

        return redirect()->route('fitur.index')->with('success', 'Fitur updated successfully.');
    }

    public function destroy(Fitur $fitur)
    {
        $fitur->delete();
        return redirect()->route('fitur.index')->with('success', 'Fitur deleted successfully.');
    }


    
}
