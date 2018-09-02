@extends('master')

@section('title', 'All Posts')

@section('content')

    <div class="container" style="margin-top:100px; margin-bottom: 100px">
        <h3>
            All Posts
        </h3>
        <br>

        @foreach($posts as $post)

        <div class="col-lg-8" style="margin-bottom: 50px">

          <!-- Title -->
          <a href="{{ route('post.show', $post->id) }}">
            
            <h1 class="mt-4">{{ $post->title }}</h1>

          </a> 

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
          
{{--           <h3>Comments</h3>
          <div style="border: 1px solid lightgrey; height: 200px">
              <strong>{{ $post->user->username }}:  </strong>{{$post->comments}}
          </div>        
          </div>
 --}}
          
        @endforeach

        <div>
          {{ $posts->links() }}
        </div> 

    </div>


@endsection