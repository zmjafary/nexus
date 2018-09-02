@extends('master')

@section('title', 'All Posts')

@section('content')

    <div class="container" style="margin-top:100px; margin-bottom: 100px">

        <div class="col-lg-8" style="margin-bottom: 50px">

          <!-- Title -->
          <h1 class="mt-4">{{ $post->title }}</h1>

          <!-- Author -->
          <p class="lead"> by {{$post->user->username}} </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on {{ $post->created_at }}</p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="{{ asset($post->image) }}" alt=""> 

          <hr>
          
          <!-- Post Content -->
          <p class="lead">{{ $post->description }}</p>
    </div>

@endsection