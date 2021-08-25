@extends('layout.admin')
@section('title', isset($post) ? "Редактировать статью ($post->id)" : 'Головна ')
@section('sidebar_admin')
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 246px; height: 1300px;">
      <span class="rounded mx-auto d-block">
            <img src="https://yt3.ggpht.com/ytc/AKedOLSxj3f6SCY-36SL4P93njWW8R_v9s-OhZKKjUj-=s900-c-k-c0x00ffffff-no-rj"
                 style="width: 28px; height: 35px;">
      </span>
        <hr>
        <a href="{{route("admin.posts.index")}}" class="nav-link active badge badge-warning "
           aria-current="page">
            <h2> Статьи</h2>
        </a>
        <hr>
        <a href="{{ route('admin.posts.create') }}" class="nav-link active badge badge-warning mb-auto"
           aria-current="page">
            <h4> Добавить статью</h4>
        </a>
        <div>
            <a href="{{route("admin.logout")}}">
                <h2><p class="text-center">Exit</p></h2>
            </a>
        </div>
    </div>
@endsection

@section('main_content')
    <br><br><br><br>
    <h2>{{isset($post) ? "Редактировать статью ($post->id)" : 'Добавить новую'}}</h2>
    <br>
    <form enctype="multipart/form-data" method="POST"
          action="{{isset($post) ? route("admin.posts.update",$post->id) : route("admin.posts.store") }}">
        @csrf
        @if(isset($post))
            @method('PUT')
        @endif
        <div class="form-group">
            <input name="title" type="text" class="form-control @error('title') border border-danger @enderror"
                   placeholder="Название">
        </div>
        @error('title')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <div class="form-group">
            <input name="preview" type="text" class="form-control @error('preview') border border-danger @enderror"
                   placeholder="Автор">
        </div>
        @error('preview')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <div class="form-group">
            <input name="description" type="text"
                   class="form-control @error('description') border border-danger @enderror" placeholder="Описание">
        </div>
        @error('description')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <div class="form-group">
            @if(isset($post) && $post->thumbnail)
                <div>
                    <img src="/storage/posts/{{ $post->thumbnail }}" class="card-img-top" alt="...">
                </div>.

            @endif
            <input name="thumbnail" type="file" placeholder="Обложка">
            @error('thumbnail')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </form>
@endsection


