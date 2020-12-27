@extends('layouts.app')
@section('content')

<h1>Edit post</h1>

    {!! Form::model($post, ['method'=>"PATCH", 'action'=>['PostController@update', $post->id]]) !!}
    <div class="form-group">
        {!! Form::label('title','Post Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
        {!! Form::label('content','Post Content:') !!}
        {!! Form::text('content', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Post', ['class'=>'btn btn-primary'])!!}
    </div>
    {!! Form::close() !!}

    {!! Form::model($post, ['method'=>"DELETE", 'action'=>['PostController@destroy', $post->id]]) !!}
    {!! Form::submit('Delete Post', ['class'=>'btn btn-danger'])!!}
    {!! Form::close() !!}
{{-- {!! Form::open(['method'=>"PATCH", 'action'=>'PostController@update']) !!}
{{ csrf_field() }}
<div class="form-group">
    {!! Form::label('title','Post Title:') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
    {!! Form::label('content','Post Content:') !!}
    {!! Form::text('content', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Update Post', ['class'=>'btn btn-primary'])!!}
</div>

{!! Form::close() !!} --}}
{{-- <form method="POST" action="/posts/{{$post->id}}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="title" placeholder="Enter Post Title" value="{{$post->title}}">
    <input type="text" name="content" placeholder="Enter Post Content" value="{{$post->content}}">
    <button type="submit" name="Submit">Submit</button>
</form> --}}



@endsection