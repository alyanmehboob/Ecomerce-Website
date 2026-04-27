<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Signup as AdminSignup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Signup extends Controller
{

    public function signup(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:signup,email',
            'password' => 'required'
        ]);

        $signup =  new AdminSignup();
        if (!DB::table('signup')->where('email', $signup->email)->exists()) {
            // insert karo
            $signup->name = $request->username;
            $signup->email = $request->email;
            $signup->password = Hash::make($request->password);
            $signup->save();
        }
        return redirect()->back();
    }












    public function signup_view()
    {
        return view('auth/signup');
    }
}
