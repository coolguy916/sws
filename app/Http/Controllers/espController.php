<?php

namespace App\Http\Controllers;

use App\Models\EspControl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class espController extends Controller
{
    public function index()
    {
        $datas = EspControl::all();
        return view('User.esp_control.index', compact('datas'));
    }

    public function create()
    {
        return view('User.esp_control.form'); // Path to your Blade component
    }

    public function store(Request $request){
        $this->validate($request, [
            'schedule' => 'required'
        ]);

        $userId = Auth::id();

        EspControl::create([
            'schedule' => $request->schedule,
            'id_user' => $userId
        ]);

        return redirect()->back();
    }

    public function edit(){

    }

    public function update($id){

    }

    public function destroy($id){
        $data = EspControl::findOrFail($id);
        $data->delete();

        return redirect()->back();
    }
}
