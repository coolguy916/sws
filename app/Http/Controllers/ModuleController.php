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
    $user = user::all();
    $module = Module::all();
    return view('Admin.Home.form' ,compact('user','module'));
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
public function update(Request $request) {
    Module::query()->update(['lokasi' => $request->lokasi, 
]);
return redirect()->back()->with('success','Data berhasil di edit');
}

public function deleted($id)
{
    $module = Module::find($id);
    $module->delete();
    return redirect()->back()->with('success', 'Barang berhasil dihapus');

}
}
