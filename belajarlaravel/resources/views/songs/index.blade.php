@extends('layout.app')

@section('title','Songs')

@section('body')
    Songs  
    -
    @foreach($songs as $song)
    {{$song->Title}}
    @endforeach
@endsection
