@extends('base')

@section('title', 'Main Page')

@section('content')
    <x-films :films="$films" :categories="$categories">
        <x-slot name="filmSearch">
            <x-film-search></x-film-search>
        </x-slot>
        <x-slot name="categories">
            <x-categories :categories="$categories"></x-categories>
        </x-slot>
    </x-films>
@stop