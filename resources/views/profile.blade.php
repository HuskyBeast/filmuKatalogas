@extends('base')

@section('title', 'My Profile')

@section('content')
    @if ($user->banner)
    <div class="lg:px-48 lg:py-8 md:px-20 sm:px-9 p-5 mx-auto" id="banner">
    @else
    <div class="lg:px-48 lg:py-8 md:px-20 sm:px-9 p-5 mx-auto  bg-red-300">
    @endif 
        <div class="h-96 flex flex-wrap content-end">
            @if ($user->icon)
            <img src='{{ asset("storage/users/img/$user->icon") }}' class="w-40 h-40 rounded-full">
            @else
            <img src="{{ asset('img/profileIcon.jpg') }}" class="w-40 h-40 rounded-full">
            @endif
            <div class="lg:px-8 px-5 py-10 flex flex-col content-end self-end">
                <span class="flex-1 items-end text-3xl font-bold text-center">{{ $user->name }}</span>
                <div>
                    <button class="flex-none px-2 w-16 h-7 bg-gray-200 bg-opacity-20 border-2 border-gray-400 border-opacity-25 rounded-full">Edit</button>
                    <button class="flex-none ml-3 px-2 w-20 h-7 bg-gray-200 bg-opacity-20 border-2 border-gray-400 border-opacity-25 rounded-full">Refresh</button>
                </div>
            </div>
        </div>
    </div>    
    <hr class="bg-gray-200 border-0 h-1">
    <div class="flex flex-wrap ml-44">
        <button onclick="showSection('library');"class="px-10 py-3 border-l-2 border-r-2 border-r border-gray-300">Library</button>
        <button onclick="showSection('settings');"class="px-10 py-3 border-r-2 border-gray-300">Settings</button>
    </div>
    <hr class="bg-gray-200 border-0 h-1">
    <div class="" id="library">
    <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 px-64">
        <!-- Adds User's about section -->
        <div class="pt-10">
            <x-profile-about :user="$user"></x-profile-about>
        </div>
        <div class="lg:col-span-2 md:col-span-1">
            <!-- Adds User's library section -->
            <x-profile-library :user="$user" :films="$films"></x-profile-library>
        </div>
    </div>
    </div>
    <div class="text-center hidden" id="settings"> 
        <x-profile-settings></x-profile-settings>
    </div>
    <style>
        #banner {
            background-image: url("storage/users/img/{{ $user->banner }}");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <script>
        function showSection(section) {
            if (section == "library") {
                document.getElementById("library").style.display = "block";
                document.getElementById("settings").style.display = "none";
            } else if (section == "settings") {
                document.getElementById("settings").style.display = "block";
                document.getElementById("library").style.display = "none";
            }
        }
    </script>
@stop