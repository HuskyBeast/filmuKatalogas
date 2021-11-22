@extends('base')

@section('title', 'Main Page')

@section('content')
<div class="w-1/2 mx-auto my-16 p-5">
    <div class="text-center pb-5">
    <button id="buttonCategories" onclick="showCategories();" class="mx-auto bg-white p-2 border-2 text-blue-500 border-blue-500">Categories</button>
    <button id="buttonFilms" onclick="showFilms();" class="mx-auto bg-white bg-blue-200 p-2 border-2 text-blue-500 border-blue-500">Films</button>
    </div>
    <div id="categories" style="display: none;">
    <form action="{{ url('addCategory') }}" method="POST" class="text-center py-5">
        @csrf
        <h1 class="text-3xl text-green-500 text-center">Add a category</h1>
        <label for="name">
            Name of Category:
            <br>
            <input type="text" name="name" id="name">
        </label>
        <br>
        <label for="description">
            Description of Category:
            <br>
            <textarea name="description" id="description"></textarea>
            <br>
        </label>
        <input type="submit" value="Add category" class='mx-auto block bg-white p-2 border-2 text-green-500 border-green-500'>
    </form>
    <form action="{{ url('deleteCategory') }}" method="POST">
        @csrf
        <h1 class="text-3xl text-red-500 text-center">Remove a category</h1>
        <select class="text-center mx-auto block my-5" name="id">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
            <input type="submit" value="Delete category" class='mx-auto block bg-white p-2 border-2 text-red-500 border-red-500'>
        </select>
    </form>
    <form action="{{ url('/editCategory/') }}" class="text-center py-5" method="POST">
        @csrf
        <h1 class="text-blue-500 text-3xl">Edit a Category</h1>
        <br>
        <select name="category" id="category" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <br>
        <br>
        <input type="submit" value="Edit Category" class="text-blue-500 border-2 border-blue-500 p-2">
    </form>
    </div>
    <div id="films">
    <form action="{{ url('addFilm') }}" method="POST" class="text-center py-5" enctype="multipart/form-data">
        @csrf
        <h1 class="text-3xl text-green-500 text-center">Add a Film</h1>
        <label for="name">
            Name of Film:
            <br>
            <input type="text" name="name" id="name" required>
            <br>
            <br>
        </label>
        <label for="description">
            Description of Film:
            <br>
            <textarea name="description" id="description" required></textarea>
            <br>
            <br>
        </label>
        <label for="release_date">
            Release date of Film:
            <br>
            <input type="date" name="release_date" id="release_date" required>
            <br>
            <br>
        </label>
        <label for="length">
            Length of Film:
            <br>
            <input type="text" name="length" id="length" required>
            <br>
            <br>
        </label>
        <label for="audience">
            Audience rating of Film:
            <br>
            <select name="audience" id="audience">
                <option value=""></option>
                <option value="G">G</option>
                <option value="PG-13">PG-13</option>
                <option value="R">R</option>
                <option value="M">M</option>
            </select>
            <br>
            <br>
        </label>
        <label for="writers">
            Writers of Film:
            <br>
            <textarea name="writers" id="writers" required></textarea>
            <br>
            <br>
        </label>
        <label for="cover">
            Upload the Film cover:
            <br>
            <input type="file" name="cover" id="cover" accept=".jpg, .jpeg, .png">
            <br>
            <br>
        </label>
        <label for="trailer">
            Embedded link of Film trailer:
            <br>
            <input type="text" name="trailer" id="trailer">
            <br>
            <br>
        </label>
        <label for="categories">
            <br>
            <fieldset>
                <legend>Choose all fitting categories:</legend>
                <div>
                    @foreach ($categories as $category)
                    <label for="{{ $category->id }}" class="px-2">
                        {{ $category->name }}
                        <input type="checkbox" value="{{ $category->id }}" name="categories" id="{{ $category->id }}">
                    </label>
                    @endforeach
                </div>
            </fieldset>
            <br>
            <br>
        </label>
        
        <input type="submit" value="Add film" class='mx-auto block bg-white p-2 border-2 text-green-500 border-green-500'>
    </form>
    <form action="{{ url('deleteFilm') }}" method="POST" class="py-5">
        @csrf
        <h1 class="text-3xl text-red-500 text-center">Remove a film</h1>
        <select class="text-center mx-auto block my-5" name="id">
            @foreach ($films as $film)
            <option value="{{ $film->id }}">{{ $film->name }}</option>
            @endforeach
            <input type="submit" value="Delete film" class='mx-auto block bg-white p-2 border-2 text-red-500 border-red-500'>
        </select>
    </form>
    <form action="{{ url('/editFilm/') }}" class="text-center py-5" method="POST">
        @csrf
        <h1 class="text-blue-500 text-3xl">Edit a Film</h1>
        <br>
        <select name="film" id="film" required>
            @foreach ($films as $film)
                <option value="{{ $film->id }}">{{ $film->name }}</option>
            @endforeach
        </select>
        <br>
        <br>
        <input type="submit" value="Edit Film" class="text-blue-500 border-2 border-blue-500 p-2">
    </form>
    </div>
</div>
<script>
    function showCategories() {
        $categories = document.getElementById("categories");
        $films = document.getElementById("films");
        $buttonCategories = document.getElementById("buttonCategories");
        $buttonFilms = document.getElementById("buttonFilms");

        $categories.style.display = "block";
        $films.style.display = "none";
        $buttonCategories.classList.add("bg-blue-200");
        $buttonFilms.classList.remove("bg-blue-200");
    }
    function showFilms() {
        $categories = document.getElementById("categories");
        $films = document.getElementById("films");
        $buttonCategories = document.getElementById("buttonCategories");
        $buttonFilms = document.getElementById("buttonFilms")

        $categories.style.display = "none";
        $films.style.display = "block";
        $buttonCategories.classList.remove("bg-blue-200");
        $buttonFilms.classList.add("bg-blue-200");
    }
</script>
@stop