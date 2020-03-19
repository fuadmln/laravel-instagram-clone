@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row"> <!-- profile -->
        <div class="col-3 p-5"> <!-- profile image -->
            <img src="/img/insta.png" alt="profile img" class="rounded-circle" style="height: 200px">
        </div>
        <div class="col-9 pt-5"> <!-- profile info -->
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>{{ $user->posts->count() }}</strong> post</div>
                <div class="pr-4"><strong>22k</strong> followers</div>
                <div class="pr-4"><strong>20</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>

    <div class="row pt-5"> <!-- post -->
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100">
            </div>
        @endforeach
    </div>

</div>
@endsection
