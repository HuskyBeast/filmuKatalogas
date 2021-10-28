<div class = 'px-60 flex justify-between'>  
    <div class = 'mr-10 flex-auto'>
        <!-- Film search component goes here -->
        {{ $filmSearch }}
        <!-- Film search component goes here -->
        <div class = 'my-10'>
            <h3 class = 'my-2 text-lg font-bold'>Trending This Week</h3>
            <div class='filmGrid grid grid-cols-4 gap-3'>
                <div>
                    <a href="index.php"><img src="{{ asset('img/filmIcon.jpg') }}" class = 'mx-2 rounded-md' width = "180px" height = "280px"></a>
                </div>
                <div>
                    <a href="index.php"><img src="{{ asset('img/filmIcon.jpg') }}" class = 'mx-2 rounded-md' width = "180px" height = "280px"></a>
                </div>
                <div>
                    <a href="index.php"><img src="{{ asset('img/filmIcon.jpg') }}" class = 'mx-2 rounded-md' width = "180px" height = "280px"></a>
                </div>
                <div>
                    <a href="index.php"><img src="{{ asset('img/filmIcon.jpg') }}" class = 'mx-2 rounded-md' width = "180px" height = "280px"></a>
                </div>
            </div>
        </div>
        <div class = 'my-10'>
            <h3 class = 'my-2 text-lg font-bold'>Most Popular Films</h3>
            <div class="filmGrid grid grid-cols-4 gap-3">
                <div>
                    <a href="index.php"><img src="{{ asset('img/filmIcon.jpg') }}" class = 'mx-2 rounded-md' width = "180px" height = "280px"></a>
                </div>
                <div>
                    <a href="index.php"><img src="{{ asset('img/filmIcon.jpg') }}" class = 'mx-2 rounded-md' width = "180px" height = "280px"></a>
                </div>
                <div>
                    <a href="index.php"><img src="{{ asset('img/filmIcon.jpg') }}" class = 'mx-2 rounded-md' width = "180px" height = "280px"></a>
                </div>
                <div>
                    <a href="index.php"><img src="{{ asset('img/filmIcon.jpg') }}" class = 'mx-2 rounded-md' width = "180px" height = "280px"></a>
                </div>
            </div>
        </div>
        <div class = 'my-10'>
            <h3 class = 'my-2 text-lg font-bold'>Top Rated Films</h3>
            <div class="filmGrid grid grid-cols-4 gap-3">
                <div>
                    <a href="index.php"><img src="{{ asset('img/filmIcon.jpg') }}" class = 'mx-2 rounded-md' width = "180px" height = "280px"></a>
                </div>
                <div>
                    <a href="index.php"><img src="{{ asset('img/filmIcon.jpg') }}" class = 'mx-2 rounded-md' width = "180px" height = "280px"></a>
                </div>
                <div>
                    <a href="index.php"><img src="{{ asset('img/filmIcon.jpg') }}" class = 'mx-2 rounded-md' width = "180px" height = "280px"></a>
                </div>
                <div>
                    <a href="index.php"><img src="{{ asset('img/filmIcon.jpg') }}" class = 'mx-2 rounded-md' width = "180px" height = "280px"></a>
                </div>
            </div>
        </div>
        <div class = 'my-10'>
            <h3 class = 'my-2 text-lg font-bold'>Top Upcoming Films</h3>
            <div class="filmGrid grid grid-cols-4 gap-3">
                <div>
                    <a href="index.php"><img src="{{ asset('img/filmIcon.jpg') }}" class = 'mx-2 rounded-md' width = "180px" height = "280px"></a>
                </div>
                <div>
                    <a href="index.php"><img src="{{ asset('img/filmIcon.jpg') }}" class = 'mx-2 rounded-md' width = "180px" height = "280px"></a>
                </div>
                <div>
                    <a href="index.php"><img src="{{ asset('img/filmIcon.jpg') }}" class = 'mx-2 rounded-md' width = "180px" height = "280px"></a>
                </div>
                <div>
                    <a href="index.php"><img src="{{ asset('img/filmIcon.jpg') }}" class = 'mx-2 rounded-md' width = "180px" height = "280px"></a>
                </div>
            </div>
        </div>
    </div>
    <div class = 'flex-2'>
    <!-- Film categories component goes here -->
    {{ $categories }}
    <!-- Film categories component goes here -->
    </div>
</div>