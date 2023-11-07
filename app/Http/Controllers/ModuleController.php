<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Module;
use Illuminate\Support\Facades\Auth;

class ModuleController extends Controller
{
    public function index(Request $request) {
        $module = Module::with(('user'))
        -> paginate(10);
    return view('Admin.Home.index', compact('module')); // Path to your Blade component    }
    }

  public function create(Request $request) {
    $request->validate([
        'lokasi' => 'required',
    ], [
        'lokasi.required' => 'Lokasi is required',
    ]);

    $module = new Module();
    $module->lokasi = $request->lokasi;
    $module->user_id = auth()->user()->id;
    $module->status = 0;
    $module->save();

    return response()->json([
        'status' => 'success',
    ]);
}

public function store(Request $request) {
    $validatedData = $request->validate([
        'lokasi' => 'required|unique:modules',
       

    ]);
   
   //create post
   $Module = Module::create([
       'lokasi'     => $request->lokasi,
       'user_id' => auth()->user()->id,
   ]);    
   $Module->save();
    
   return redirect()->route('admin')->with('success', 'Module Berhasil Ditambahkan');
}


public function update(Request $request){
    $request->validate (
        [
            'up_lokasi'=>'required|unique:modules,lokasi,'.$request->up_id,

        ],
        [
            'up_lokasi.required'=>'Lokasi is required',
           

        ]
    );
        Module::where('id',$request->up_id)->update([
            'lokasi'=>$request->up_lokasi,
            'user_id' => auth()->user()->id,
        ]);
   
    return response()->json([
        'status'=>'success',
    ]);

}

public function deleted(Request $request)
{
    Module::find($request->module_id)->delete();
        return response()->json([
            'status'=>'success',
        ]);
}
}
