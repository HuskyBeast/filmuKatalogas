@extends('base')

@section('title', 'Main Page')

@section('content')
<div class="py-64">
    <form action="{{ url('/edit/category/') }}" method="POST" class="text-center">
        @csrf
        <h1 class="text-3xl text-blue-500 text-center">Edit a category</h1>
        <input type="hidden" name="id" value="{{ $category->id }}">
        <br>
        <label for="name">
            Name of Category:
            <br>
            <br>
            <input type="text" name="name" id="name" placeholder="{{ $category->name }}" value="{{ $category->name }}" required>
        </label>
        <br>
        <br>
        <label for="description">
            Description of Category:
            <br>
            <br>
            <textarea name="description" id="description" placeholder="{{ $category->description }}" required>{{ $category->description }}</textarea>
            <br>
            <br>
        </label>
        <input type="submit" value="Add category" class='mx-auto block bg-white p-2 border-2 text-blue-500 border-blue-500'>
    </form>
</div>
@stop