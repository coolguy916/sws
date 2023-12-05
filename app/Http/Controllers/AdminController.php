<?php

namespace App\Http\Controllers;
use  App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'user')
        ->paginate(10);
        return view('Admin.user.index', compact('users')); // Path to your Blade component
    }

    public function update(Request $request){
        $request->validate (
            [
                'up_role'=>'required',
            ]);

            $users= User::find($request->up_id);
            User::where('id',$request->up_id)->update([
                'role'=>$request->up_role,
            ]);

        return response()->json([
            'status'=>'success',
        ]);

    }

    public function create()
    {
        return view('Admin.Home.data_user');
    }

    public function form()
    {
        $data = ['title' => 'form']; // Your data to pass to the view
        return view('Admin.Home.form', $data); // Path to your Blade component
    }

    public function delete(Request $request)
{
    User::find($request->user_id)->delete();
        return response()->json([
            'status'=>'success',
        ]);
}
}
