<?php

namespace App\Http\Controllers;

use App\Models\Deskripsi;
use Illuminate\Http\Request;

class DeskripsiController extends Controller
{
    public function index()
    {
        $deskripsi = Deskripsi::firstOrCreate([]);
        return view('Admin.landingpage.deskripsi', compact('deskripsi'));
    }
    
      public function update(Request $request)
      {
        $deskripsi = Deskripsi::firstOrCreate([]);
        $deskripsi->judul = $request->judul;
        $deskripsi->deskripsi = $request->deskripsi;
        $deskripsi->save();
             
        return response()->json(['message' => 'Data Berhasil Diubah!']);

          }
      /**
       * destroy
       *
       * @param  mixed $post
       * @return void
       */
      
}
