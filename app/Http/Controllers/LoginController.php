<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function login (Request $request) {
        $validated = $request->validate([
            'user' => 'required',
            'pass' => 'required',
        ]);

        if (User::where('name', $request->user)->first()) {
            $user = User::where('name', $request->user)->first();
            if (Hash::check($request->pass, $user->password)) {
                $request->session()->put('user', $user->id);
                $request->session()->regenerate();
            }
        } else {
            return redirect('/registration/');
        }
        return redirect('/');
    }
    public function logout(Request $request) {
        $request->session()->invalidate();
        return redirect('/registration/');
    }
}
