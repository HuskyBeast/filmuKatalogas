<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Categorie;
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
}
