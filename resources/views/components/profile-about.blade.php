<div class="py-4 bg-gray-200 rounded-md">
    <h2 class="text-lg font-bold text-center">About Me</h2>
    <div class="px-5">
        <p>Email:<span class="italic px-2">{{ $user->email }}</span></p>
        <p>Location:<span class="italic px-2">sample</p></span>
        <p>Birth Date:<span class="italic px-2">sample</span></p>
        <p>Join Date:<span class="italic px-2">{{ $user->created_at }}</span></p>
    </div>
</div>
