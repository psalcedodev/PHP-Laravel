@extends('layouts.app')
@section('content')

<h1>{{$post->title}}</h1>
<p>{{$post->content}} </p>
<a href="{{route('posts.edit', $post->id)}}">Edit</a>
<form method="POST" action="/posts/{{$post->id}}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="DELETE">
</form>

@endsection