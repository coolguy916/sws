<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Module;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('Admin.userdata.data_user', compact('users'));
    }

    /**
      * edit
      *
      * @param  mixed $id
      * @return View
      */
      public function edit($id)
      {
          //get post by ID
          $user = user::findOrFail($id);
  
          //render view with post
          return view('Admin.userdata.edit-user', compact('user'));
      }
      
      /**
       * update
       *
       * @param  mixed $request
       * @param  mixed $id
       * @return RedirectResponse
       */
      public function update(Request $request, $id): RedirectResponse
      {
          
  
          //get post by ID
          $user = User::findOrFail($id);
  
  
              //update post with new image
              $user->update([
                  'role' => $request->role,
              ]);
            return redirect()->route('Admin.userdata.data_user')->with('success', 'Data Berhasil Diubah!');

          }
      /**
       * destroy
       *
       * @param  mixed $post
       * @return void
       */
      public function destroy($id): RedirectResponse
      {
          //get post by ID
          $user = user::findOrFail($id);
  
          //delete post
          $user->delete();
  
          //redirect to index
          return redirect()->route('Admin.userdata.data_user')->with('success', 'Data Berhasil Diubah!');
      }
}
