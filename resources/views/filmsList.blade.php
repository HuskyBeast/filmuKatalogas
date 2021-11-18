@extends('base')

@section('title', 'Film List')

@section('content')
    <x-film-list>
        <x-slot name="filmSearch">
            <x-film-search></x-film-search>
        </x-slot>
        <x-slot name="categories">
            <x-categories></x-categories>
        </x-slot>
    </x-film-list>
@stop