@extends('layouts.app')
@section('content')

<ul></ul>
    @foreach ($posts as $post)
    <li> <a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a>  - {{$post->content}}</li>
    @endforeach
    
</ul>

@endsection