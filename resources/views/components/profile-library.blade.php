<div class="bg-gray-100">
    <div class="py-10 mx-auto w-4/6">
        <div class='pb-10 mx-auto w-11/12'>
            <div class='p-2 rounded-lg flex flex-wrap bg-white shadow'>
                <img src="{{ asset('img/searchIconLG.png') }}" width='32px'>
                <input type="search" class='text-lg w-5/6 px-3' placeholder="Search {{ $user->name }}'s Library...">
            </div>
        </div>
        <div class="flex flex-wrap justify-center gap-5 mx-auto w-11/12">
            
        <!-- Movie card example -->
        @if ($films != "no films")
        @foreach ($films as $film)
            <div class="rounded-md bg-blue-800">
                <a href='{{ url("/film/$film->id") }}'><img src='{{ asset("img/$film->cover") }}' class="rounded-t-md w-52 h-72"></a>
                <div class="p-3 flex justify-between">
                    <a class="flex-none py-1 px-3 border border-white-300 rounded-full bg-transparent text-center text-sm text-white">Edit Entry</a>
                    <div class="flex-none p-1 bg-transparent text-center text-sm text-white flex">
                        <span class="pr-1 self-center text-sm">5</span>
                        <img src="{{ asset('img/star.png') }}" class="self-center w-3.5 h-3.5">
                    </div>
                </div>
            </div>
        @endforeach
        @endif
        <!-- Movie card example end -->
        </div>
    </div>
</div>