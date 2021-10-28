@extends('base')

@section('title', 'Main Page')

@section('content')
    <x-films>
        <x-slot name="filmSearch">
            <x-film-search></x-film-search>
        </x-slot>
        <x-slot name="categories">
            <x-categories></x-categories>
        </x-slot>
    </x-films>
@stop