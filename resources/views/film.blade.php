@extends('base')

@section('title', 'Main Page')

@section('content')
    <div class="xl:w-3/4 lg:w-4/5 md:w-11/12 film mx-auto p-16 my-16 bg-blue-50 rounded-xl grid md:grid-cols-3 md:grid-rows-1 sm:grid-cols-1 sm:grid-rows-2 md:gap-8 sm:gap-0">
        <div>
            <img src='{{ asset("img/$film->cover") }}' class="w-full md:h-1/2 sm:h-1/3 mx-auto">
            <h1 class="text-center font-bold text-xl py-3">{{ $film->name }}</h1>
            <p><b>Rating:</b> <i>{{ $film->audience }}</i></p>
            <p><b>Release Date:</b> <i>{{ $film->release_date }}</i></p>
            <p><b>Categories:</b> <i>
            @foreach ($categories as $category)
                <a class="underline" href='{{ url("/category/$category->id") }}'>
                @if ($loop->last)
                    {{ $category->name }}
                @else
                    {{ $category->name }}, 
                @endif
                </a>
            @endforeach
            </i></p>
            <p><b>Length:</b> <i>{{ $film->length }}</i></p>
            <p><b>Writers:</b> <i>{{ $film->writers }}</i></p>
        </div>
        <div class="md:col-span-2 md:row-span-1 sm:col-span-1 sm:row-span-2">
        <iframe class="w-full md:h-1/2 sm:h-96" src='{{ $film->trailer }}' title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            <p class="text-lg font-bold py-2">Film description</p>
            <p>{{ $film->description }}</p>
        </div>
    </div>
@stop