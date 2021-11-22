<div class = 'w-full bg-blue-900 shadow-lg'>
    <nav>
        <div class = 'flex p-4 justify-between shadow-lg md:mx-auto md:w-11/12'>
            <ul class = 'flex justify-center items-center'>
                <li class = 'items-center'>
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('img/LOGO.png') }}" class="w-40">
                    </a>
                </li>
                <li class = 'md:px-10 px-5 items-center'>
                    <a href="{{ url('/films/') }}" class = 'text-white'>Browse</a>
                </li>
            </ul>
            <ul class = 'flex justify-center items-center'>
                <li class = 'mx-auto bg-blue-800 rounded-md flex flex-wrap justify-between items-center'>
                    <img src="{{ asset('img/searchIconSM.png') }}" class = 'p-1 w-8' >
                    <input class ='px-2 p-2 bg-blue-800 text-white rounded-md' type="search" placeholder="Search site...">
                </li>
                @if (session('user'))
                <!-- Navigation of signed in user -->
                <li class = 'px-5 items-center text-gray-400'><a href="{{ url('/profile/') }}">My Library</a></li>
                <!-- Profile icon leading to profile -->
                <li class = 'px-5 items-center'><a href="{{ url('/profile/') }}" class="link"><img src="{{ asset('img/profileIcon.jpg') }}" class = 'w-12 rounded-full link'></a></li>
                <div class="dropdown">
                    <button class="link">▼</button>
                    <div class="dropdown-menu">
                        <li class = 'px-5 items-center'><a href="{{ url('/logout/') }}" class = 'text-gray-400'>Sign Off</a></li>
                    </div>
                </div>
                @else
                <!-- Navigation of logged out user -->
                <li class = 'px-5 items-center'><a href="{{ url('/registration/') }}" class = 'text-gray-400'>Sign In</a></li>
                @endif
            </ul>
        </div>
    </nav>
</div>
<style>
    .dropdown {
        position: relative;
    }
    .dropdown-menu {
       position: absolute;
       width: 10rem;
       left: -8.5rem;
       top: calc(100% + 2rem);
       background-color: white;
       padding-top: .75rem;
       padding-bottom: .75rem;
       padding-left: 1rem;
       padding-right: 1rem;
       border-radius: .25rem;
       box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .2);
       opacity: 0;
       text-align: center;
    }
    .dropdown > .link:focus + .dropdown-menu {
        opacity: 1;
    }
    .dropdown-menu a:hover {
        color: blue;
    }
    .link {
        color: white;
    }
        
</style>