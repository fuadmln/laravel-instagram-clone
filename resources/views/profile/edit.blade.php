@extends('layouts.app')

@section('content')
<div class="container">
    
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h2>Edit Profile</h2>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Title</label>

                    <input id="title" name="title" type="text" 
                    class="form-control @error('title') is-invalid @enderror" 
                    value="{{ old('title') }}" 
                    autocomplete="title" autofocus>

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Description</label>

                    <input id="description" name="description" type="text" 
                    class="form-control @error('description') is-invalid @enderror" 
                    value="{{ old('description') }}" 
                    autocomplete="description" autofocus>

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label">Url</label>

                    <input id="url" name="url" type="text" 
                    class="form-control @error('url') is-invalid @enderror" 
                    value="{{ old('url') }}" 
                    autocomplete="url" autofocus>

                    @error('url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">Image </label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group row pt-4">
                    <button class="btn btn-primary">Add New Post</button>
                </div>

            </div>
        </div>

    </form>

</div>
@endsection
