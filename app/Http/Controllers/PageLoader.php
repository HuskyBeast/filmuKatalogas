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
}
