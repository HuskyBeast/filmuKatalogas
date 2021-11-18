<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email',
            'user' => 'required',
            'pass' => 'required',
            'confirmpass' => 'required'
        ]);
        if (!(User::where('email', $request->email)->first()) && !(User::where('user', $request->user)->first())) {
            if ($request->pass == $request->confirmpass) {
                $password = Hash::make($request->pass);
                $newUser = new User;
                $newUser->name = $request->user;
                $newUser->email = $request->email;
                $newUser->password = $password;
                $newUser->save();
                $request->session()->put('user', $request->user);
                $request->session()->regenerate();
            }
        } else {
            return redirect('/registration/');
        }
        return redirect('/');
    }
}
