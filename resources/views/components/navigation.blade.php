<div class = 'w-full'>
    <nav class = 'bg-blue-900 shadow-lg'>
        <div class = 'flex p-4 justify-between'>
            <ul class = 'flex justify-center items-center'>
                <li class = 'items-center'>
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('img/LOGO.png') }}" width = '180px'>
                    </a>
                </li>
                <li class = 'px-10 items-center'>
                    <a href="{{ url('/') }}" class = 'text-white'>Browse</a>
                </li>
            </ul>
            <ul class = 'flex justify-center items-center'>
                <li class = 'mx-5 bg-blue-800 rounded-md flex flex-wrap justify-between items-center'>
                    <img class = 'p-1' src="{{ asset('img/searchIconSM.png') }}">
                    <input class ='p-1 bg-blue-800 text-white' type="search" placeholder="Search site...">
                </li>
                    @if ($loggedIn)
                    <!-- Navigation of signed in user -->
                   <li class = 'px-5 items-center text-gray-400'><a href="{{ url('/profile/library/') }}">My Library</a></li>
                    <!-- Profile icon leading to profile -->
                    <li class = 'px-5 items-center'><a href="{{ url('/profile/') }}"><img src="{{ asset('img/profileIcon.jpg') }}" class = 'w-16 rounded-full'></a></li>
                    @else
                    <!-- Navigation of logged out user -->
                    <li class = 'px-5 items-center'><a href="{{ url('/registration/') }}" class = 'text-gray-400'>Sign In</a></li>
                    @endif
            </ul>
        </div>
    </nav>
</div>