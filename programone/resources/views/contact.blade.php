@extends('layouts.app')
@section('content')
    @if (count($people))
    <ul>
        @foreach ($people as $person)
            <li>{{$person}}</li>
        @endforeach
    </ul>
    @endif
    <h1>Contact Page</h1>
@endsection