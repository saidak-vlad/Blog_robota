
@section('title',' Вхід ')
@include('partials.header')

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
<br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <form action="{{route('register_process')}}" method="POST">
                @csrf
                <h1 class="h3 mb-3 fw-normal">Регистрация</h1>

                <div class="form-floating py-3">
                    <input name="name" type="text" class="form-control @error('name') border border-danger @enderror"  placeholder="Name">
                </div>
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror

                <div class="form-floating py-3">
                    <input name="email" type="email" class="form-control @error('email') border border-danger @enderror"  placeholder="Email">
                </div>
                @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                <div class="form-floating py-3">
                    <input name="password" type="password" class="form-control @error('password') border border-danger @enderror"  placeholder="Пароль">

                    @error('password')
                    <p class="text-danger">{{$message}}</p>
                    @enderror

                </div>

                <div class="form-floating py-3">
                    <input name="password_confirmation" type="password" class="form-control @error('password_confirmation') border border-danger @enderror"  placeholder="Подтверджение пароля">
                </div>

                @error('password_confirmation')
                <p class="text-danger">{{$message}}</p>
                @enderror

                <div>
                    <a href="{{route('login')}}" ><label for="floatingPassword">Есть акаунт</label></a>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Зарегистрироваться</button>

            </form>
        </div>
    </div>
</div>


</body>
</html>






