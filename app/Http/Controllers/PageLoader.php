<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Categorie;
use App\Models\User;
use App\Models\UserLibrary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageLoader extends Controller
{
    public function index() {
        $films = Film::all()->random(4);
        $films2 = Film::all()->random(4);
        $films3 = Film::all()->random(4);
        $films4 = Film::all()->random(4);
        $categories = Categorie::all();
        $category = 0;
        return view('index', compact('films', 'films2', 'films3', 'films4', 'categories', 'category'));
    }
    public function category(Request $request) {
        $id = $request->route('id');
        $category = Categorie::find($id);
        $categories = Categorie::all();
        $films = Film::where('categories', 'LIKE', "%{$id}%")->get();
        return view('filmsByCategory', compact('films', 'category', 'categories'));
    }
    public function filmsList() {
        $categories = Categorie::all();
        $films = Film::all();
        $category = 0;
        return view("filmsList", compact('films', 'categories', 'category'));
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

    public function filmSearch(Request $request) {
        $search = $request->search;
        $categories = Categorie::all();
        if ($request->category) {
            $category = $request->category;
            $films = Film::where('name', 'LIKE', "%{$search}%")->where('categories', 'LIKE', "%{$category}%")->get();
            $category = Categorie::find($category);
            return view('filmsList', compact('films', 'search', 'categories', 'category'));
        } else {
            $films = Film::where('name', 'LIKE', "%{$search}%")->get();
            return view('filmsList', compact('films', 'search', 'categories'));
        }
    }
}
