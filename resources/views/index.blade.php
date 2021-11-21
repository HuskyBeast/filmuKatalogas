@extends('base')

@section('title', 'Main Page')

@section('content')
    <x-films :films="$films" :films2="$films2" :films3="$films3" :films4="$films4">
        <x-slot name="filmSearch">
            <x-film-search></x-film-search>
        </x-slot>
        <x-slot name="categories">
            <x-categories :categories="$categories"></x-categories>
        </x-slot>
    </x-films>
@stop