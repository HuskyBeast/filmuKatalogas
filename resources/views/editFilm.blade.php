@extends('base')

@section('title', 'Main Page')

@section('content')
<form action="{{ url('addFilm') }}" method="POST" class="text-center" enctype="multipart/form-data">
        @csrf
        <h1 class="text-3xl text-green-500 text-center">Add a Film</h1>
        <label for="name">
            Name of Film:
            <br>
            <input type="text" name="name" id="name" placeholder="{{ $film->name }}" value="{{ $film->name }}" required>
            <br>
            <br>
        </label>
        <label for="description">
            Description of Film:
            <br>
            <textarea name="description" id="description" placeholder="{{ $film->description }}" value="{{ $film->description }}" required></textarea>
            <br>
            <br>
        </label>
        <label for="release_date">
            Release date of Film:
            <br>
            <input type="date" name="release_date" id="release_date" placeholder="{{ $film->release_date }}" value="{{ $film->release_date }}" required>
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
@stop