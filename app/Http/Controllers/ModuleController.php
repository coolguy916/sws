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
        ->join('users', 'modules.user_id', '=', 'users.id')
        ->select('modules.id', 'modules.lokasi','modules.status','users.name', 'modules.created_at')
        ->paginate(5);
        $users = User::all();

    return view('Admin.Home.index', compact('module','users')); // Path to your Blade component    }
    }

  public function create(Request $request) {
    $request->validate([
        'lokasi' => 'required',
        'user_id' => 'required',

    ], [
        'lokasi.required' => 'Lokasi is required',
    ]);

    $module = new Module();
    $module->lokasi = $request->lokasi;
    $module->user_id = $request->user_id;
    $module->status = 0;
    $module->save();

    return response()->json([
        'status' => 'success',
    ]);
}

public function store(Request $request) {
    $validatedData = $request->validate([
        'lokasi' => 'required|unique:modules',
        'user_id' => 'required',


    ]);

   //create post
   $Module = Module::create([
       'lokasi'     => $request->lokasi,
       'user_id' => $request->user_id,
   ]);
   $Module->save();
   return redirect()->route('admin')->with('success', 'Module Berhasil Ditambahkan');
}


public function update(Request $request){
    $request->validate (
        [
            'up_lokasi'=>'required',
        ]);

        $module= Module::find($request->up_id);
        Module::where('id',$request->up_id)->update([
            'lokasi'=>$request->up_lokasi,
            'user_id' => $request->up_user_id,
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

public function switchstatus(Request $request){
        $module = Module::find($request->module_id);
        $module->status = $request->status;
        $module->save();
    }
}
