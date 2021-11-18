@extends('base')

@section('title', 'My Profile')

@section('content')
    <div class="lg:px-48 lg:py-8 md:px-20 sm:px-9 p-5 mx-auto  bg-red-300">
        <div class="h-96 flex flex-wrap content-end">
            <img src="{{ asset('img/profileIcon.jpg') }}" class="w-40 rounded-full">
            <div class="lg:px-8 px-5 py-10 flex flex-col content-end self-end">
                <span class="flex-1 items-end text-3xl font-bold text-center">Username</span>
                <div>
                    <button class="flex-none px-2 w-16 h-7 bg-gray-200 bg-opacity-20 border-2 border-gray-400 border-opacity-25 rounded-full">Edit</button>
                    <button class="flex-none ml-3 px-2 w-20 h-7 bg-gray-200 bg-opacity-20 border-2 border-gray-400 border-opacity-25 rounded-full">Refresh</button>
                </div>
            </div>
        </div>
    </div>    
    <hr class="bg-gray-400 border-0 h-1">
    <div class="flex flex-wrap ml-44">
        <a href="{{ url('/profile/') }}" class="px-10 py-3 border-l-2 border-r border-gray-400">About</a>
        <a href="{{ url('/profile/library/') }}" class="px-10 py-3 border-l border-r-2 border-gray-400">Library</a>
    </div>
    <hr class="bg-gray-200 border-0 h-px">
    <!-- Adds User's about section  -->
    <!-- <x-profile-about></x-profile-about> -->
    
    <!-- Adds User's library section -->
    <!-- <x-profile-library></x-profile-library> -->
@stop