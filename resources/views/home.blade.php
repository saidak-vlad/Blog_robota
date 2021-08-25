@extends('layout.layout')
@section('title','Головна ')
@include('partials.header')

@section('main_content')

    @foreach($posts as $post)
    @include('partials.posts.item', ['post' => $post])
    @endforeach

@endsection



