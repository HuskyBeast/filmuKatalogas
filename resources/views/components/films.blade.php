<div class = 'xl:px-auto lg:px-24 px-16 flex lg:flex-nowrap flex-wrap lg:justify-between justify-center w-4/5 mx-auto'>  
    <div class = 'mx-2 px-2 justify-center'>
        <!-- Film search component goes here -->
        {{ $filmSearch }}
        <!-- Film search component goes here -->
        <div class="px-2">
            <div class = 'my-10'>
                <h3 class = 'my-2 text-lg font-bold'>Trending This Week</h3>
                <div class='filmGrid grid md:grid-cols-4 grid-cols-2 md:gap-3 gap-5 sm:place-items-center'>
                    @foreach ($films as $film)
                        <div class="bg-blue-700 rounded-md">
                            @if (session('user'))
                            <a href='{{ url("/film/$film->id") }}'><img src='{{ asset("storage/films/covers/$film->cover") }}' class = 'xl:w-52 xl:h-80 md:w-48 md:h-60 w-44 h-56 rounded-t-md'></a>
                            <div class="p-3 flex justify-center">
                                <a href='{{ url("/addToLibrary/$film->id") }}' class="flex-none py-0.5 px-4 border border-white-300 rounded-full bg-blue-700 text-center text-sm text-white">Add to Library</a>
                            </div>
                            @else
                            <a href='{{ url("/film/$film->id") }}'><img src='{{ asset("storage/films/covers/$film->cover") }}' class = 'xl:w-52 xl:h-80 md:w-48 md:h-60 w-44 h-56 rounded-md'></a>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
            <div class = 'my-10'>
                <h3 class = 'my-2 text-lg font-bold'>Most Popular Films</h3>
                <div class="filmGrid grid md:grid-cols-4 grid-cols-2 md:gap-3 gap-5 sm:place-items-center">
                    @foreach ($films2 as $film)
                        <div class="bg-blue-700 rounded-md">
                        @if (session('user'))
                            <a href='{{ url("/film/$film->id") }}'><img src='{{ asset("storage/films/covers/$film->cover") }}' class = 'xl:w-52 xl:h-80 md:w-48 md:h-60 w-44 h-56 rounded-t-md'></a>
                            <div class="p-3 flex justify-center">
                                <a href='{{ url("/addToLibrary/$film->id") }}' class="flex-none py-0.5 px-4 border border-white-300 rounded-full bg-blue-700 text-center text-sm text-white">Add to Library</a>
                            </div>
                            @else
                            <a href='{{ url("/film/$film->id") }}'><img src='{{ asset("storage/films/covers/$film->cover") }}' class = 'xl:w-52 xl:h-80 md:w-48 md:h-60 w-44 h-56 rounded-md'></a>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
            <div class = 'my-10'>
                <h3 class = 'my-2 text-lg font-bold'>Top Rated Films</h3>
                <div class="filmGrid grid md:grid-cols-4 grid-cols-2 md:gap-3 gap-5 sm:place-items-center">
                    @foreach ($films3 as $film)
                        <div class="bg-blue-700 rounded-md">
                            @if (session('user'))
                            <a href='{{ url("/film/$film->id") }}'><img src='{{ asset("storage/films/covers/$film->cover") }}' class = 'xl:w-52 xl:h-80 md:w-48 md:h-60 w-44 h-56 rounded-t-md'></a>
                            <div class="p-3 flex justify-center">
                                <a href='{{ url("/addToLibrary/$film->id") }}' class="flex-none py-0.5 px-4 border border-white-300 rounded-full bg-blue-700 text-center text-sm text-white">Add to Library</a>
                            </div>
                            @else
                            <a href='{{ url("/film/$film->id") }}'><img src='{{ asset("storage/films/covers/$film->cover") }}' class = 'xl:w-52 xl:h-80 md:w-48 md:h-60 w-44 h-56 rounded-md'></a>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
            <div class = 'my-10'>
                <h3 class = 'my-2 text-lg font-bold'>Top Upcoming Films</h3>
                <div class="filmGrid grid md:grid-cols-4 grid-cols-2 md:gap-3 gap-5 sm:place-items-center">
                    @foreach ($films4 as $film)
                        <div class="bg-blue-700 rounded-md">
                            @if (session('user'))
                            <a href='{{ url("/film/$film->id") }}'><img src='{{ asset("storage/films/covers/$film->cover") }}' class = 'xl:w-52 xl:h-80 md:w-48 md:h-60 w-44 h-56 rounded-t-md'></a>
                            <div class="p-3 flex justify-center">
                                <a href='{{ url("/addToLibrary/$film->id") }}' class="flex-none py-0.5 px-4 border border-white-300 rounded-full bg-blue-700 text-center text-sm text-white">Add to Library</a>
                            </div>
                            @else
                            <a href='{{ url("/film/$film->id") }}'><img src='{{ asset("storage/films/covers/$film->cover") }}' class = 'xl:w-52 xl:h-80 md:w-48 md:h-60 w-44 h-56 rounded-md'></a>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    <div class="lg:flex-1 md:flex-none lg:order-none md:order-first">
        <!-- Film categories component goes here -->
        {{ $categories }}
        <!-- Film categories component goes here -->
    </div>
</div>