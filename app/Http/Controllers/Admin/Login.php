<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Signup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Login extends Controller
{
    // 
    public function login_auth(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = DB::table('signup')->where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            session([
                'user_id' => $user->id,
                'user_email' => $user->email
            ]);
            return redirect(url('/addcategory'));
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }
    public function login_view()
    {
        return view('auth/login');
    }
}
