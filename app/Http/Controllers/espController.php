<?php

namespace App\Http\Controllers;

use App\Models\EspControl;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class espController extends Controller
{
    public function index()
    {
        $datas = EspControl::with('module')
        ->join('modules', 'esp_controls.id_module', '=', 'modules.id')
        ->join('users', 'esp_controls.id_user', '=', 'users.id')
        ->select('esp_controls.id', 'esp_controls.runtime','esp_controls.schedule','modules.status','modules.lokasi', 'esp_controls.created_at')
            ->paginate(10);
        $modules = Module::all();
        return view('User.esp_control.index', compact('datas','modules'));
    }

    public function create()
    {
        $modules = Module::all();
        return view('User.esp_control.form', compact('modules')); // Path to your Blade component
    }

    public function store(Request $request){
        $this->validate($request, [
            'schedule' => 'required',
            'runtime' => 'required|numeric',
            'id_module' => 'required|exists:modules,id'
        ]);

        $userId = Auth::id();

        EspControl::create([
            'schedule' => $request->schedule,
            'runtime' => $request->runtime,
            'id_module' => $request->id_module,
            'id_user' => $userId
        ]);

        return redirect()->route('schedule.index')->with(['success' => 'Data Barang Berhasil Ditambah!']);
    }

    public function edit($id){
        $data = EspControl::findOrFail($id);
        $modules = Module::all();
        return view('User.esp_control.editform', compact('data', 'modules'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'schedule' => 'required',
            'runtime' => 'required|numeric',
            'id_module' => 'required|exists:modules,id'
        ]);

        $data = EspControl::findOrFail($id);
        $data->update([
            'schedule' => $request->schedule,
            'runtime' => $request->runtime,
            'id_module' => $request->id_module,
        ]);

        return redirect()->route('schedule.index')->with(['success' => 'Data Barang Berhasil Diubah!']);
    }

    public function destroy($id){
        $data = EspControl::findOrFail($id);
        $data->delete();

        return redirect()->route('schedule.index')->with(['success' => 'Data Barang Berhasil Dihapus!']);
    }

    public function manual(String $id){
        $modules = Module::findOrFail($id);
        return response()->json($modules);
    }

}
