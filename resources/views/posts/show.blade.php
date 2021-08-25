@section('title','статті')
@extends('layout.layout')
@include('partials.header')

@section('main_content')
    <div class="card mb-3">
        <div class="text-center"><h1 class="card-title">{{ $post->title }}</h1></div>
        <img src="/storage/posts/{{ $post->thumbnail }}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">{{$post->preview}}</p>
            <p class="card-text">{{$post->description}}</p>
        </div>
    </div>

    <h1>Залиште коментар</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error  }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{route("comment", $post->id)}}">
        @csrf
        <input type="name" name="text" class="form-control" placeholder="Залиште коментар"><br>
        <button type="submit" class="btn btn-success">Надіслати</button>
    </form>

    @foreach($post->comments as $comment)
        <div class="alert alert-warning">
            <h3>{{$comment->user->name}}</h3>
            <p>{{$comment->text}}</p>
        </div>
    @endforeach
@endsection


