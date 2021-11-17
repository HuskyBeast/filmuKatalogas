@extends('base')

@section('title', 'My Profile')

@section('content')
    <div class="bg-red-300">
        <div class="p-5 grid grid-cols-12 grid-rows-4 gap-4">
            <img src="{{ asset('img/profileIcon.jpg') }}" class="row-span-2 col-span-2 row-start-3 w-40 rounded-full">
            <div class="row-span-2 col-span-3 row-start-3 grid grid-cols-4 grid-rows-2">
                <span class="pt-8 text-3xl font-bold text-center col-span-2">Username</span>
                <button class="row-start-2 px-2 w-16 h-8 px-2 bg-gray-200 bg-opacity-20 border-2 border-gray-400 border-opacity-25 rounded-full">Edit</button>
                <button class="row-start-2 px-2 w-20 h-8 px-2 bg-gray-200 bg-opacity-20 border-2 border-gray-400 border-opacity-25 rounded-full">Refresh</button>
            </div>
        </div>
    </div>    
    <hr class="bg-gray-400 border-0 h-1">
    <div class="text-center divide-x-2 divide-gray-400">
            <button class="px-2 py-3">About</button>
            <button class="px-2 py-3">Library</button>
    </div>
    <hr class="bg-gray-200 border-0 h-px">
    <x-profile-about></x-profile-about>
@stop