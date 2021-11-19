<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Categorie;
use App\Models\User;
use App\Models\UserLibrary;
use Illuminate\Http\Request;

class PageLoader extends Controller
{
    public function index() {
        $films = Film::all()->random(4);
        $categories = Categorie::all();
        return view('index', compact('films', 'categories'));
    }
    public function category(Request $request) {
        $id = $request->route('id');
        $category = Categorie::find($id);
        $categories = Categorie::all();
        $films = Film::query()->where('categories', 'LIKE', "%{$id}%")->get();
        return view('filmsByCategory', compact('films', 'category', 'categories'));
    }
    public function filmsList() {
        $categories = Categorie::all();
        $films = Film::all();
        return view("filmsList", compact('films', 'categories'));
    }
    public function profileAbout(Request $request) {
        if ($request->session()->get("user")) {
            $user = User::find($request->session()->get("user"));
        }
        $page = "about";
        return view('profile', compact('user', 'page'));
    }
    public function profileLibrary(Request $request) {
        $films = "no films";
        if ($request->session()->get("user")) {
            $user = User::find($request->session()->get("user"));
            $userLibrary = UserLibrary::find($user->id);
            if ($userLibrary) {
                $userLibrary = explode("/", $userLibrary->films);
                $films = [];
                foreach ($userLibrary as $film) {
                    $films[] = Film::find($film);
                }
            }
            
        }
        $page = "library";
        return view('profile', compact('user', 'page', 'films'));
        
    }
    public function film(Request $request) {
        $id = $request->route('id');
        $film = Film::find($id);
        $catString = explode("/", $film->categories);
        $categories = [];
        foreach ($catString as $category) {
            $categories[] = Categorie::find($category);
        }
        return view ("film", compact("film", "categories"));
    }
}
