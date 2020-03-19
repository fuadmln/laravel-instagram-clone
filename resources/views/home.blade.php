@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5"> <!-- profile image -->
            <img src="/img/insta.png" alt="profile img" class="rounded-circle" style="height: 200px">
        </div>
        <div class="col-9 pt-5"> <!-- profile info -->
            <div><h1>username</h1></div>
            <div class="d-flex">
                <div class="pr-4"><strong>154</strong> post</div>
                <div class="pr-4"><strong>22k</strong> followers</div>
                <div class="pr-4"><strong>20</strong> following</div>
            </div>
        </div>
    </div>
</div>
@endsection
