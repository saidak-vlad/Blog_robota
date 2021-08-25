<div class="card mb-4 mb-5">
    <a href="{{route("posts.show",$post->id)}}">
        <img class="card-img-top" src="/storage/posts/{{ $post->thumbnail }}" alt="..."></a>
    <div class="card-body bg-dark text-white">
        <h2 class="card-title">{{ $post->title }}</h2>
        <p class="card-text"> {!! $post->preview !!}</p>
        <a class="btn btn-warning mt-4" href="{{route("posts.show",$post->id)}}">Read more →</a>
    </div>
</div>




