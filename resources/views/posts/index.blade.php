@section('title','статті')
@extends('layout.layout')

@include('partials.header')
@section('header')
    <header class="py-5 bg-light border-bottom ">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome to Blog Home!</h1>

        </div>
    </div>
</header>
@endsection
@section('main_content')

        @foreach($posts as $post)
            @include('partials.posts.item', ['post' => $post])
        @endforeach
        <br>
        <div class="row justify-content-center">
            {!! $posts->links() !!}
        </div>


@endsection
