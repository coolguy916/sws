<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class KontakController extends Controller
{
    public function index() {
        $kontaks=Kontak::paginate(5);
        return view('Admin.LandingPage.kontak', compact('kontaks'));
    }

       public function create()
    {
        return view('kontak.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'nullable|string',
            'keterangan' => 'nullable|string',
            'link' => 'nullable|string',
            'icon' => 'nullable|array|max:6',
            'judul' => 'nullable|array|max:6',
            'deskripsi' => 'nullable|array|max:6',
        ]);

        $kontak = new Kontak();
        $kontak->text = $request->text;
        $kontak->keterangan = $request->keterangan;
        $kontak->link = $request->link;
        $kontak->icon = json_encode($request->icon);
        $kontak->judul = json_encode($request->judul);
        $kontak->deskripsi = json_encode($request->deskripsi);
        $kontak->save();

        return redirect()->route('kontak.index')->with('success', 'Kontak created successfully.');
    }

    public function edit(Kontak $kontak)
    {
        return view('kontak.edit', compact('kontak'));
    }

    public function update(Request $request, Kontak $kontak)
    {
        $request->validate([
            'text' => 'nullable|string',
            'keterangan' => 'nullable|string',
            'link' => 'nullable|string',
            'icon' => 'nullable|array|max:6',
            'judul' => 'nullable|array|max:6',
            'deskripsi' => 'nullable|array|max:6',
        ]);

        $kontak->text = $request->text;
        $kontak->keterangan = $request->keterangan;
        $kontak->link = $request->link;
        $kontak->icon = json_encode($request->icon);
        $kontak->judul = json_encode($request->judul);
        $kontak->deskripsi = json_encode($request->deskripsi);
        $kontak->save();

        return redirect()->route('kontak.index')->with('success', 'Kontak updated successfully.');
    }

    public function destroy(Kontak $kontak)
    {
        $kontak->delete();
        return redirect()->route('kontak.index')->with('success', 'Kontak deleted successfully.');
    }
}
