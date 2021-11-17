@extends('base')

@section('title', 'Main Page')

@section('content')
<form id="reg-form" class="w-1/3 py-5 mx-auto my-10 rounded-3xl bg-gray-100">
    <h1 class="py-2 text-center text-3xl font-bold">
        <img src="{{ asset('img/LOGO2.png') }}" class="mx-auto w-40" alt="Mov.Io"></img>
    </h1>
     <!-- Login menu -->
    <div id="login" class="py-4">
        <div id="reg-f-ul" class="w-3/4 mx-auto py-4"> 
            <input type="text" name="user" class="w-full px-4 py-2 my-1 text-black-800 bg-white-600 placeholder-gray-600" placeholder="Username">
            <input type="password" name="pass" class="w-full px-4 py-2 my-1 text-black-800 bg-white-600 placeholder-gray-600" placeholder="Password">
        </div>
        <input type="submit" class="block py-2 bg-green-200 rounded-full w-1/5 mx-auto text-center text-lg text-green-800 font-bold" value="Log In">
    </div>
    <!-- Registration menu -->
    <div id="registration" class="py-4 hidden">
        <ul id="reg-f-ul" class="w-3/4 mx-auto py-4"> 
            <li><input type="text" name="email" class="w-full px-4 py-2 my-1 text-black-800 bg-white-600 placeholder-gray-600" placeholder="Email"></li>
            <li><input type="text" name="user" class="w-full px-4 py-2 my-1 text-black-800 bg-white-600 placeholder-gray-600" placeholder="Username"></li>
            <li><input type="password" name="pass" class="w-full px-4 py-2 my-1 text-black-800 bg-white-600 placeholder-gray-600" placeholder="Password"></li>
            <li><input type="password" name="confirmpass" class="w-full px-4 py-2 my-1 text-black-800 bg-white-600 placeholder-gray-600" placeholder="Confirm Password"></li>
        </ul>
        <input type="submit" id="submitup" class="block py-2 bg-green-200 rounded-full w-1/4 mx-auto text-center text-lg text-green-800 font-bold" value="Sign Up">
    </div>
    <hr class="py-2">
    <!-- Switch -->
    <div id="switch">
        <h2 id="switch-log" class="text-center">Need an account? 
            <button type="button" onclick="swthToReg()" class="text-red-400">Sign up -></button>
        </h2>
        <h2 id="switch-reg" class="text-center hidden">Already own an account? 
            <button type="button" onclick="swthToLog()" class="text-red-400">Sign in -></button>
        </h2>
    </div>
</form> 
<script src="{{ asset('js/script-register.js') }}" ></script>

@stop