<div class = 'sm:order-first my-10 lg:ml-5 pt-3 px-5 rounded-lg bg-white shadow'>
    <div>
        <h3 class = 'font-bold uppercase'>My favorite categories</h3>
        <hr class = 'my-2'>
        <p>Favoriting categories will improve your recommendations.</p>
    </div>
    <div class = 'py-8'>
        <h3 class = 'font-bold uppercase'>Categories</h3>
        <hr class = 'my-2'>
        <div class = "lx:pr-8 lg:grid xl:grid-cols-2 lg:grid-cols-1">
            @foreach ($categories as $category)
            <a class="category lg:text-left md:text-center px-2 w-min rounded-full" href='{{ url("/category/$category->id") }}'>{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
</div>
<style>
    .category:hover {
        color: blue;
        background: lightblue;
    }
    .category {
        line-height: 2rem;
    }
</style>