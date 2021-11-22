@extends('base')

@section('title', 'Main Page')

@section('content')
<form action="{{ url('edit/film') }}" method="POST" class="text-center" enctype="multipart/form-data">
        @csrf
        <h1 class="text-3xl text-green-500 text-center">Add a Film</h1>
        <input type="hidden" name="id" value="{{ $film->id }}">
        <label for="name">
            Name of Film:
            <br>
            <input type="text" class="w-64" name="name" id="name" placeholder="{{ $film->name }}" value="{{ $film->name }}" required>
            <br>
            <br>
        </label>
        <label for="description">
            Description of Film:
            <br>
            <textarea name="description" id="description" placeholder="{{ $film->description }}" cols="40" rows=5 required>{{ $film->description }}</textarea>
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
            <input type="text" name="length" id="length" value="{{ $film->length }}" placeholder="{{ $film->length }}" required>
            <br>
            <br>
        </label>
        <label for="audience">
            Audience rating of Film:
            <br>
            <select name="audience" id="audience">
                @if (!$film->audience)
                <option value="" selected></option>
                @else
                <option value=""></option>
                @endif
                @if ($film->audience == "G")
                <option value="G" selected>G</option>
                @else
                <option value="G">G</option>
                @endif
                @if ($film->audience == "PG-13")
                <option value="PG-13" selected>PG-13</option>
                @else
                <option value="PG-13">PG-13</option>
                @endif
                @if ($film->audience == "R")
                <option value="R" selected>R</option>
                @else
                <option value="R">R</option>
                @endif
                @if ($film->audience == "M")
                @else
                <option value="M" selected>M</option>
                @endif
                <option value="M">M</option>
            </select>
            <br>
            <br>
        </label>
        <label for="writers">
            Writers of Film:
            <br>
            <textarea name="writers" id="writers" placeholder="{{ $film->writers }}" required cols="40" rows="5">{{ $film->writers }}</textarea>
            <br>
            <br>
        </label>
        <p>Current Cover:</p>
        <img src='{{ asset("storage/films/covers/$film->cover") }}' class="w-40 h-50 mx-auto">
        <br>
        <label for="cover">
            Change the Film cover:
            <br>
            <input type="file" name="cover" id="cover" accept=".jpg, .jpeg, .png">
            <br>
            <br>
        </label>
        <label for="trailer">
            Embedded link of Film trailer:
            <br>
            <input type="text" class="w-96" name="trailer" id="trailer" value="{{ $film->trailer }}" placeholder="{{ $film->trailer }}">
            <br>
            <br>
        </label>
        <label for="categories">
            <br>
            <fieldset>
                <legend>Choose all fitting categories:</legend>
                <div>
                    @foreach ($categories as $category)
                        <?php $selected = 0; ?>
                        @foreach ($categoriesCurrent as $categoryCurrent)
                            @if ($categoryCurrent == $category->id)
                                <?php $selected++; ?>
                            @endif
                        @endforeach
                                @if ($selected)
                                <label for="{{ $category->id }}" class="px-2">
                                    {{ $category->name }}
                                    <input type="checkbox" value="{{ $category->id }}" name="categories" id="{{ $category->id }}" checked>
                                </label>
                                @else
                                <label for="{{ $category->id }}" class="px-2">
                                    {{ $category->name }}
                                    <input type="checkbox" value="{{ $category->id }}" name="categories" id="{{ $category->id }}">
                                </label>
                                @endif
                    @endforeach
                </div>
            </fieldset>
            <br>
            <br>
        </label>
        
        <input type="submit" value="Edit film" class='mx-auto block bg-white p-2 border-2 text-blue-500 border-blue-500'>
    </form>
@stop