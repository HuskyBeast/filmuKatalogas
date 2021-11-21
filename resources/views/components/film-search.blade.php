<div class = 'my-10 px-4'>
    <form action="{{ route('filmSearch') }}" method="POST">
    @csrf
    @isset ($category)
    <input type="hidden" value="{{ $category->id }}" name="category">
    @endisset
    <p class = 'my-2 font-bold text-2xl'>Search Films...</p>
    <div class = 'p-2 rounded-lg flex flex-wrap bg-white shadow'>
        <img src="{{ asset('img/searchIconLG.png') }}" class="w-8">
        @isset ($search)
        <input type="search" class = 'px-3 text-lg w-5/6' placeholder="$search" name="search">
        @else
        <input type="search" class = 'px-3 text-lg w-5/6' placeholder="Search for a film..." name="search">
        @endisset
    </div>
</div>