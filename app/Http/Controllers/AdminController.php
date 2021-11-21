<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Film;

class AdminController extends Controller
{
    public function deleteFilm(Request $request) {
        $id = $request->id;
        $film = Film::find($id);
        $film->delete();
        return redirect('/admin/');
    }
    public function deleteCategory(Request $request) {
        $id = $request->id;
        $category = Categorie::find($id);
        $category->delete();
        return redirect('/admin/');
    }
    public function addCategory(Request $request) {
        $name = $request->name;
        $description = $request->description;
        $category = new Categorie;
        if ($name && $description) {
            $category->name = $name;
            $category->description = $description;
            $category->save();
        }
        return redirect('/admin/');
    }
    public function addFilm(Request $request) {
        $validated = $request->validate([
            "name" => "required",
            'description' => "required",
            'release_date' => "required",
            'length' => "required",
            "writers" => "required",
            "categories" => "required",
            'cover' => "required"
        ]);
            $name = $request->name;
            $description = $request->description;
            $release_date = $request->release_date;
            $length = $request->length;
            $writers = $request->writers;
            $categories = $request->categories;
            $cover = $request->file('cover');
            $audience = "";
            $trailer = "";
            if ($request->audience) {
                $audience = $request->audience;
            }
            if ($request->$trailer) {
                $trailer = $request->trailer;
            }
            if (is_array($categories)) {
                $categories = implode("/", $categories);
            }
            if ($request->hasFile('cover')) {
                $cover = $cover->store('public/films/covers');
                $cover = end(explode("/", $cover));
            }
            $film = new Film;
            $film->name = $name;
            $film->description = $description;
            $film->release_date = $release_date;
            $film->length = $length;
            $film->writers = $writers;
            $film->categories = $categories;
            $film->audience = $audience;
            $film->trailer = $trailer;
            $film->cover = $cover;
            $film->save();
    }
    public function editCategory(Request $request) {
        $validated = $request->validate([
            "id" => "required",
            "name" => "required",
            "description" => "required"
        ]);

        $id = $request->id;
        $name = $request->name;
        $description = $request->description;

        $category = Categorie::find($id);
        $category->name = $name;
        $category->description = $description;

        $category->save();

        return redirect('/admin/');
    }
}
