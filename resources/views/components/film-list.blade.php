<div class = 'px-16 flex lg:flex-nowrap md:flex-wrap justify-between w-4/5 mx-auto'>  
    <div class="pb-10 mx-auto w-4/6">
        <!-- Film search component goes here -->
        {{ $filmSearch }}
        <!-- Film search component goes here -->
        <div class="flex flex-wrap gap-5 mx-auto w-10/12 gap-4">
                @isset ($films)
                @foreach ($films as $film)
                <div class="rounded-md bg-blue-800">
                    @if (session('user'))
                    <a href='{{ url("/film/$film->id") }}'><img src='{{ asset("storage/films/covers/$film->cover") }}' class="rounded-t-md w-44 h-60"></a>
                    <div class="p-3 flex justify-center">
                        <a href='{{ url("/addToLibrary/$film->id") }}' class="flex-none py-0.5 px-4 border border-white-300 rounded-full bg-blue-700 text-center text-sm text-white">Add to Library</a>
                    </div>
                    @else
                    <a href='{{ url("/film/$film->id") }}'><img src='{{ asset("storage/films/covers/$film->cover") }}' class="rounded-md w-44 h-60"></a>
                    @endif
                </div>
                @endforeach
                @endisset
        </div>
    </div>
    <div class = 'lg:flex-1 md:flex-none lg:order-none md:order-first'>
    <!-- Film categories component goes here -->
    {{ $categories }}
    <!-- Film categories component goes here -->
    </div>
</div>