@extends('layouts.app')

@section('content')
    @include('inc.messages')
    <h1>Blog</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card card-title">
                    <h3 style="margin-bottom: 0"><a class="nav-link" href="/posts/{{$post->id}}"> {{$post->title}} </a></h3>
                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found.</p>
    @endif
@endsection