@extends('layouts.app')

@section('content')
    
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->content}}
    </div>

    <div>
        @include('posts.comments.comment')
    </div>
@endsection