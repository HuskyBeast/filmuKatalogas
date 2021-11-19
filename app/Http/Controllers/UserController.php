<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Film;
use App\Models\UserLibrary;

class UserController extends Controller
{
    public function addToLibrary(Request $request) {
        $id = $request->route('id');
        if ($request->session()->get("user")) {
            $user = $request->session()->get("user");
            if (Film::find($id)) {
                if (UserLibrary::where('user_id', $user)->first()) {
                    $lib = UserLibrary::where('user_id', $user)->first();
                    if ($lib->films) {
                        if (!(in_array($id ,explode("/", $lib->films)))) {
                            $lib->films = $lib->films . "/$id";
                        }
                    } else {
                        $lib->films = "$id";
                    }
                } else {
                    $newLib = new UserLibrary;
                    $newLib->user_id = $user;
                    $newLib->films = $id;
                    $newLib->save();
                }
            }
        }
        $lib->save();
        return redirect(url()->previous());
    }
}
