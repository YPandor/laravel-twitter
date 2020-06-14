@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img src="/images/default-profile-banner.jpg" alt="banner" class="mb-2">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-bold">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div>
                <button type="submit" class="rounded-full border border-gray-300 py-2 px-2 text-xs">Edit Profile</button>
                <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white text-xs">Follow Me</button>
            </div>
        </div>
        <img src="/images/myAvatar.svg" width="50px" class="rounded-full mr-2 absolute" style="width:150px; left:calc(50% - 75px); top:270px" alt="avatar">
    </header>

    @include('_timeline', [
        'tweets' => $user->tweets
    ])
@endsection
