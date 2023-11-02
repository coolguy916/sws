<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Module;

class ModuleController extends Controller
{

  public function create(Request $request) {
    $request->validate (
        [
            'lokasi'=>'required|unique:module',

        ],
        [
            'lokasi.required'=>'Location Module is required',
            'lokasi.unique'=>'Location Already Exist',

        ]
    );

    $Module = new Module();
    $Module    ->lokasi = $request->lokasi;
    $Module    ->save();
    return response()->json([
        'status'=>'success',
    ]);
}
}
