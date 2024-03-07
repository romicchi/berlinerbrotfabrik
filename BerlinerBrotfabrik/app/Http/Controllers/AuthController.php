<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // loginpage
    public function loginPage()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('name', $request->name)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // The passwords match...
            if (Hash::needsRehash($user->password)) {
                $user->password = Hash::make($request->password);
                $user->save();
            }
    
            Auth::login($user);
    
            return redirect()->intended('adminpage');
        } else {
            return back()->withErrors([
                'message' => 'Wrong credentials please try again'
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
