@extends('layouts.app')
@section('content')
<h1>Create post</h1>
<form method="POST" action="/posts">
    @csrf <!-- {{ csrf_field() }} -->
    <input type="text" name="title" placeholder="Enter Post Title">
    <input type="text" name="content" placeholder="Enter Post Content">
    <button type="submit" name="Submit">Submit</button>
</form>


@endsection