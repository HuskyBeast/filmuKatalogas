<div class = 'my-10 p-5 rounded-lg bg-white shadow'>
    <div>
        <h3 class = 'font-bold uppercase'>My favorite categories</h3>
        <hr class = 'my-2'>
        <p>Favoriting categories will improve your recommendations.</p>
    </div>
    <div class = 'my-10'>
        <h3 class = 'font-bold uppercase'>Categories</h3>
        <hr class = 'my-2'>
        @foreach ($categories as $category)
            <a class="category p-2 m-2" href="#">{{ $category->name }}</a>
        @endforeach
    </div>
</div>
<style>
    .category:hover {
        color: blue;
        background: lightblue;
        border-radius: 10%;
    }
    .category {
        line-height: 3rem;
    }
</style>