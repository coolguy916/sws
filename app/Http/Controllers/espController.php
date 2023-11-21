<?php

namespace App\Http\Controllers;

use App\Models\EspControl;
use App\Models\Module;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class EspController extends Controller
{
    // public function index()
    // {
    //     $datas = EspControl::with('module')
    //     ->join('modules', 'esp_controls.id_module', '=', 'modules.id')
    //     ->join('users', 'esp_controls.id_user', '=', 'users.id')
    //     ->select('esp_controls.id', 'esp_controls.runtime','esp_controls.schedule','modules.status','modules.lokasi', 'esp_controls.created_at')
    //         ->paginate(10);
    //     $modules = Module::all();
    //     return view('User.esp_control.index', compact('datas','modules'));
    // }

    // public function create()
    // {
    //     $modules = Module::all();
    //     return view('User.esp_control.form', compact('modules')); // Path to your Blade component
    // }

    // public function store(Request $request){
    //     $this->validate($request, [
    //         'schedule' => 'required',
    //         'runtime' => 'required|numeric',
    //         'id_module' => 'required|exists:modules,id'
    //     ]);

    //     $userId = Auth::id();

    //     EspControl::create([
    //         'schedule' => $request->schedule,
    //         'runtime' => $request->runtime,
    //         'id_module' => $request->id_module,
    //         'id_user' => $userId
    //     ]);

    //     return redirect()->route('schedule.index')->with(['success' => 'Data Barang Berhasil Ditambah!']);
    // }

    // public function edit($id){
    //     $data = EspControl::findOrFail($id);
    //     $modules = Module::all();
    //     return view('User.esp_control.editform', compact('data', 'modules'));
    // }

    // public function update(Request $request, $id){
    //     $this->validate($request, [
    //         'schedule' => 'required',
    //         'runtime' => 'required|numeric',
    //         'id_module' => 'required|exists:modules,id'
    //     ]);

    //     $data = EspControl::findOrFail($id);
    //     $data->update([
    //         'schedule' => $request->schedule,
    //         'runtime' => $request->runtime,
    //         'id_module' => $request->id_module,
    //     ]);

    //     return redirect()->route('schedule.index')->with(['success' => 'Data Barang Berhasil Diubah!']);
    // }

    // public function destroy($id){
    //     $data = EspControl::findOrFail($id);
    //     $data->delete();

    //     return redirect()->route('schedule.index')->with(['success' => 'Data Barang Berhasil Dihapus!']);
    // }
    // AJAX

    public function index()
    {
        $espControls = EspControl::with('module')
            ->join('modules', 'esp_controls.id_module', '=', 'modules.id')
            ->join('users', 'esp_controls.id_user', '=', 'users.id')
            ->select('esp_controls.id', 'esp_controls.runtime', 'esp_controls.schedule', 'modules.status', 'modules.lokasi','esp_controls.id_module', 'esp_controls.created_at');
            // ->paginate(10);
        $modules = Module::where('user_id', Auth::id())->get();
        $users = User::all();
        return view('User.esp_control.index', compact('espControls', 'modules', 'users'));
    }

    public function fetchschedule()
{
    $espControls = EspControl::with('module')
        ->join('modules', 'esp_controls.id_module', '=', 'modules.id')
        ->join('users', 'esp_controls.id_user', '=', 'users.id')
        ->select('esp_controls.id', 'esp_controls.runtime', 'esp_controls.schedule', 'esp_controls.status', 'modules.lokasi','esp_controls.id_module', 'esp_controls.created_at')
        ->paginate(2);

        return response()->json([
            'esp_controls' => $espControls->items(), // Only the items, excluding pagination data
            'pagination' => [
                'total' => $espControls->total(),
                'per_page' => $espControls->perPage(),
                'current_page' => $espControls->currentPage(),
                'last_page' => $espControls->lastPage(),
                'from' => $espControls->firstItem(),
                'to' => $espControls->lastItem(),
            ],
        ]);
    }

    public function fetchusermodule(){
        $modules = Module::where('user_id', Auth::id())->get();
        return response()->json(['modules' => $modules]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'schedule' => 'required',
            'runtime' => 'required',
            'id_module' => 'required',
            // 'id_user' => 'required',
        ]);

        $userId = Auth::id();
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            $espControl = new EspControl;
            $espControl->schedule = $request->input('schedule');
            $espControl->runtime = $request->input('runtime');
            $espControl->id_module = $request->id_module;
            $espControl->id_user = $userId;
            $espControl->save();

            return response()->json([
                'status' => 200,
                'message' => 'Schedule Added Successfully.',
            ]);
        }
    }

    public function edit($id)
    {
        $espControl = EspControl::find($id);

        if ($espControl) {
            return response()->json([
                'status' => 200,
                'esp_control' => $espControl,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Schedule Found.',
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'schedule' => 'required',
            'runtime' => 'required',
            'id_module' => 'required',
            // 'id_user' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->message(),
            ]);
        } else {
            $espControl = EspControl::find($id);

            if ($espControl) {
                $espControl->schedule = $request->input('schedule');
                $espControl->runtime = $request->input('runtime');
                $espControl->id_module = $request->id_module;
                // $espControl->id_user = $request->id_user;
                $espControl->update();

                return response()->json([
                    'status' => 200,
                    'message' => 'Schedule Updated Successfully.',
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'No Schedule Found.',
                ]);
            }
        }
    }

    public function destroy($id)
    {
        $espControl = EspControl::find($id);

        if ($espControl) {
            $espControl->delete();

            return response()->json([
                'status' => 200,
                'message' => 'Schedule Deleted Successfully.',
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Schedule Found.',
            ]);
        }
    }

    public function auto(String $id){
        $schedule = EspControl::where('id_module', $id)->all();
        return response()->json($schedule);
    }

    public function manual(String $id)
    {
        $module = Module::findOrFail($id);
        return response()->json($module);
    }
    public function autoDone(String $id, string $status){
        $schedule = EspController::findOrFail($id);
        $schedule->update(['status' => $status]);

    }
}
