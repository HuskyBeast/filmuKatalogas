<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Film;
use App\Models\UserLibrary;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

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
                    $lib->save();
                } else {
                    $newLib = new UserLibrary;
                    $newLib->user_id = $user;
                    $newLib->films = $id;
                    $newLib->save();
                }
            }
        }
        return redirect(url()->previous());
    }
    public function updateUser(Request $request) {
        if ($request->session()->get("user")) {
            $user = User::find($request->session()->get("user"));
            $name = $request->name;
            $oldEmail = $request->oldEmail;
            $email = $request->email;
            $password = $request->password;
            $confirmPassword = $request->confirmPassword;
            $gender = $request->gender;
            $location = $request->location;
            $age = $request->age;
            $icon = $request->file('icon');
            $banner = $request->file('banner');
            if ($name) {
                $user->name = $name;
            }
            if ($oldEmail && $email && $oldEmail == $user->email) {
                $user->email = $email;
            }
            if ($password && $confirmPassword && $password == $confirmPassword) {
                $user->password = Hash::make($password);
            }
            if ($gender) {
                $user->gender = $gender;
            }
            if ($location) {
                $user->location = $location;
            }
            if ($age) {
                $user->age = $age;
            }
            if ($request->hasFile('icon') && $request->icon) {
                if ($user->icon) {
                    Storage::delete("public/users/img/" . $user->icon);
                }
                $icon = $icon->store('public/users/img/');
                $icon = explode("/", $icon);
                $icon = end($icon);
                $user->icon = $icon;
            }
            if ($request->hasFile('banner') && $request->banner) {
                if ($user->banner) {
                    Storage::delete("public/users/img/" . $user->banner);
                }
                $banner = $banner->store('public/users/img/');
                $banner = explode("/", $banner);
                $banner = end($banner);
                $user->banner = $banner;
            }
            $user->save();
            return redirect("/profile/");
}
}
}