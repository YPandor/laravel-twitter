<div class="flex p-4 border border-b-gray-400">
    <div class="mr-2">
        <a href="{{ route('profile', $tweet->user) }}">
            <img src="/images/myAvatar.svg" width="50px" class="rounded-full mr-2" alt="avatar">
        </a>
    </div>
    <div>
        <a href="{{ route('profile', $tweet->user) }}">
            <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
        </a>
        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>