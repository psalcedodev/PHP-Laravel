@extends('layouts.app')
@section('content')

<h1>Edit post</h1>
<form method="POST" action="/posts/{{$post->id}}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="title" placeholder="Enter Post Title" value="{{$post->title}}">
    <input type="text" name="content" placeholder="Enter Post Content" value="{{$post->content}}">
    <button type="submit" name="Submit">Submit</button>
</form>



@endsection