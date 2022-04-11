<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function getRegister()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
         User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        flash()->success('Berhasil Register');
        return redirect(route('login'));
    }
}
