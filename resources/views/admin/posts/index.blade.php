@extends('layout.admin')
@section('title','Головна ')
@section('sidebar_admin')
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 246px; height: 1300px;">
      <span class="rounded mx-auto d-block">
            <img src="https://yt3.ggpht.com/ytc/AKedOLSxj3f6SCY-36SL4P93njWW8R_v9s-OhZKKjUj-=s900-c-k-c0x00ffffff-no-rj" style="width: 28px; height: 35px;">
      </span>


        <hr>
                <a href="{{route("admin.posts.index")}}" class="nav-link active badge badge-warning " aria-current="page">
                    <h2> Статьи</h2>
                </a><hr>
        <a href="{{ route('admin.posts.create') }}" class="nav-link active badge badge-warning mb-auto"
           aria-current="page">
            <h4> Добавить статью</h4>
        </a>


        <hr>
        <div>
            <a href="{{route("admin.logout")}}">
                <h2><p class="text-center">Exit</p></h2>
            </a>
        </div>
    </div>
@endsection

@section('main_content')

    <br><br><br><br>
   <h1>Все статьи</h1> <br>
@foreach($posts as $post)
    <div class="row border rounded-sm">
        <div class="col border-bottom"> <h4>{{ $post->title }}</h4></div>
        <div class="w-100"></div>
        <div class="col-10 py-2">{{ $post->preview }}</div>
          <div class="col-end-1 py-2">
            <a class="text-success nav-link active" href="{{ route('admin.posts.edit', $post->id) }}">Редактировать </a>
            <div class="col-end-1 py-2 pr-1">

            <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class=" btn btn-danger btn-sm">удалить</button>
            </form>

            </div>
        </div>
    </div>
    <br>
@endforeach
    {!! $posts->links() !!}
@endsection


