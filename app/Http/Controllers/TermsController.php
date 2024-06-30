<?php

namespace App\Http\Controllers;
use App\Models\terms;

use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function index()
    {
        $termsAndConditions = terms::firstOrCreate([]);
        return view('Admin.landingpage.syarat-dan-ketentuan', compact('termsAndConditions'));
    }
    public function update(Request $request)
    {
        $termsAndConditions = terms::firstOrCreate([]);
        $termsAndConditions->teks = $request->teks;
        $termsAndConditions->save();

    return redirect()->back()->with('success', 'Syarat dan ketentuan berhasil diupdate');
    }
}
