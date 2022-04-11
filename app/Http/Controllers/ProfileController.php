<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Users;
use Storage;
class ProfileController extends Controller
{
    public function index()
    {
        

        return view('profile.index');
    }

    public function edit()
    {
      

        return view('profile.edit');

    }

    public function update(Request $request)
    {

        if ($request->user()->avatar) {
            Storage::delete($request->user()->avatar);
        }
        
       $avatar = $request->file('avatar')->store('avatars');
        $request->user()->update([
            'avatar' => $avatar
        ]);

        return redirect(route('profile.index'));
    }

    public function destroy(Request $request)
    {
        if ($request->user()->avatar) {
            Storage::delete($request->user()->avatar);
        }
        
        $request->user()->update([
            'avatar' => null
        ]);

        return redirect()->back();
    }

}
