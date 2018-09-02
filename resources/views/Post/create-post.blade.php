@extends('master')

@section('title', 'All Posts')

@section('content')

<div class="container" style="margin-top:100px;height: 400px">
    <h3>
        Create Post
    </h3>
    <br>
        <form class="login_form row" method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-8 form-group">
                <input class="form-control" type="text" placeholder="Post Title" name="title">
            </div>
            <div class="col-md-8 form-group">
                <input class="form-control" type="file" name="image"> 
            </div>
            <div class="col-md-8 form-group">
                <textarea class="form-control" placeholder="Description" name="description">
                    
                </textarea>
            </div>

            <div class="col-md-8 form-group">
                <button type="submit" value="submit" class="btn btn-primary form-control">POST</button>
            </div>
        </form>
</div>

@endsection