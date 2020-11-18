@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-3 pt-5">
            <img src="{{ $user->profile->profileImage() }}" style="width: 50%;" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-4">
                    <h4 class="mr-4">{{ $user->username }}</h4>
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan
            </div>

            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $followersCount  }}</strong> followers</div>
                <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-4 pb-4">
        @foreach($user->posts as $post)
        <div class="col-4 mb-4">
            <a href="/p/{{ $post-> id}}">
                <img src="/storage/{{ $post->image }}" class="w-100">  
            </a>
        </div>
        @endforeach

    </div>
</div>
@endsection
