<div class = 'xl:px-auto lg:px-24 px-16 flex lg:flex-nowrap flex-wrap lg:justify-between justify-center w-3/4 mx-auto'>  
    <div class = 'mx-2 px-2 justify-center'>
        <!-- Film search component goes here -->
        {{ $filmSearch }}
        <!-- Film search component goes here -->
        <div class="px-2">
            <div class = 'my-10'>
                <h3 class = 'my-2 text-lg font-bold'>Trending This Week</h3>
                <div class='filmGrid grid md:grid-cols-4 grid-cols-2 md:gap-3 gap-5 sm:place-items-center'>
                    @foreach ($films as $film)
                        <div>
                            <a href='{{ url("/film/$film->id") }}'><img src='{{ asset("img/$film->cover") }}' class = 'xl:w-52 xl:h-80 md:w-48 md:h-60 w-44 h-56 rounded-md'></a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class = 'my-10'>
                <h3 class = 'my-2 text-lg font-bold'>Most Popular Films</h3>
                <div class="filmGrid grid md:grid-cols-4 grid-cols-2 md:gap-3 gap-5 sm:place-items-center">
                    @foreach ($films2 as $film)
                        <div>
                            <a href='{{ url("/film/$film->id") }}'><img src='{{ asset("img/$film->cover") }}' class = 'xl:w-52 xl:h-80 md:w-48 md:h-60 w-44 h-56 rounded-md'></a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class = 'my-10'>
                <h3 class = 'my-2 text-lg font-bold'>Top Rated Films</h3>
                <div class="filmGrid grid md:grid-cols-4 grid-cols-2 md:gap-3 gap-5 sm:place-items-center">
                    @foreach ($films3 as $film)
                        <div>
                            <a href='{{ url("/film/$film->id") }}'><img src='{{ asset("img/$film->cover") }}' class = 'xl:w-52 xl:h-80 md:w-48 md:h-60 w-44 h-56 rounded-md'></a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class = 'my-10'>
                <h3 class = 'my-2 text-lg font-bold'>Top Upcoming Films</h3>
                <div class="filmGrid grid md:grid-cols-4 grid-cols-2 md:gap-3 gap-5 sm:place-items-center">
                    @foreach ($films4 as $film)
                        <div>
                            <a href='{{ url("/film/$film->id") }}'><img src='{{ asset("img/$film->cover") }}' class = 'xl:w-52 xl:h-80 md:w-48 md:h-60 w-44 h-56 rounded-md'></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    <div class = 'lg:order-last order-first lg:flex-1 w-1/4'>
        <!-- Film categories component goes here -->
        {{ $categories }}
        <!-- Film categories component goes here -->
    </div>
</div>