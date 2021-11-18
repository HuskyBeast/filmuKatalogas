@extends('base')

@section('title', 'Main Page')

@section('content')
    <h1 class="text-center text-4xl py-5">Sort by category</h1>
    <div class="w-1/2 text-center mx-auto">
        <x-categories :categories="$categories"></x-categories>
    </div>
    <h3 class="text-center text-2xl font-bold py-2">{{ $category->name }}</h3>
    <p class="text-center text-md pb-5">{{ $category->description }}</p>
    <div class="grid grid-cols-4 w-1/2 mx-auto pt-5 pb-10">
                @foreach ($films as $film)
                    <div>
                        <a href="index.php"><img src='{{ asset("img/$loop->iteration.jpg") }}' class = 'mx-2 rounded-md' width = "180px" height = "280px"></a>
                    </div>
                @endforeach
    </div>
@stop