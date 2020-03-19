@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row"> <!-- profile -->
        <div class="col-3 p-5"> <!-- profile image -->
            <img src="/img/insta.png" alt="profile img" class="rounded-circle" style="height: 200px">
        </div>
        <div class="col-9 pt-5"> <!-- profile info -->
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-4"><strong>154</strong> post</div>
                <div class="pr-4"><strong>22k</strong> followers</div>
                <div class="pr-4"><strong>20</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">instagram.com</div>
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, ad, commodi? Quae fuga, iste recusandae incidunt dolore possimus enim odit, eaque ullam perspiciatis, ducimus esse vitae sunt quos omnis voluptatem.</div>
            <div><a href="#">instagram.com/username</a></div>
        </div>
    </div>

    <div class="row pt-5"> <!-- post -->
        <div class="col-4">
            <img src="/img/post1.png" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/post2.png" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/post3.png" alt="" class="w-100">
        </div>
    </div>

</div>
@endsection
