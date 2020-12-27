@extends('layouts.app')
@section('content')
<h1>Create post</h1>
{{-- <form method="POST" action="/posts"> --}}
    {!! Form::open(['method'=>"POST", 'action'=>'PostController@store', 'files'=>true]) !!}
    
    

    <div class="form-group">

        {!! Form::label('title','Post Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
        {!! Form::label('content','Post Content:') !!}
        {!! Form::text('content', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::file('file', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary'])!!}
    </div>

    {{-- <input type="text" name="title" placeholder="Enter Post Title">
    <input type="text" name="content" placeholder="Enter Post Content"> --}}
    {{-- <button type="submit" name="Submit">Submit</button> --}}
    {!! Form::close() !!}

    @if (count($errors)> 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    
        
    @endif
{{-- 
    <form action="/uploadfile" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="file" class="form-control-file" name="fileToUpload" id="exampleInputFile">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> --}}


@endsection