<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body class="bg-light">
@yield('header')
<div class="container pt-3 ">

    <div class="row mt-5 ">
        <div class="col-md-8">
            @yield('main_content')
        </div>
        <div class="col-md-4 pl-5">
            <h2><p class="mb-4">Популярные </p></h2>
            @foreach($popularPosts as $post)

                <div class="card mb-4">
                    <div class="card-header">
                    <a href="{{route("posts.show",$post->id)}} " class="text-success nav-link active" >
                        {{ $post->title }}</a>
                    </div>
                    <div class="card-body">{!! $post->preview !!}</div>
                </div>
                <br>
            @endforeach

        </div>
    </div>
</div>
</body>
</html>
