<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'JCS Restults') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #FEC311 ">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/home') }}">
                <img src="{{asset('images/logo/JCS_LOGO.png')}}" alt="" width="150px;"height="100px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto"></ul>


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>


                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <a class="dropdown-item" href="/change-password ">Mudar Senha</a>
                                <a class="dropdown-item" href="/perfil ">Meu Perfil</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>


    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>
</div>
{{--@section('content')--}}
<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                {{--                    <div class="card-header">Laravel - Change Password with Current Password Validation Example - HDTuto.com</div>--}}



                <div class="card-body">

                    <form method="POST" action="{{ route('change.password') }}">

                        @csrf



                        @foreach ($errors->all() as $error)

                            <p class="text-danger">{{ $error }}</p>

                        @endforeach



                        <div class="form-group row">

                            <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>



                            <div class="col-md-6">

                                <input id="password" type="password" class="form-control" name="current_password" autocomplete="current_password">

                            </div>

                        </div>



                        <div class="form-group row">

                            <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>



                            <div class="col-md-6">

                                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">

                            </div>

                        </div>



                        <div class="form-group row">

                            <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>



                            <div class="col-md-6">

                                <input id="new_confirm_password" type="password" class="form-control" name=" " autocomplete="current-password">

                            </div>

                        </div>



                        <div class="form-group row mb-0">

                            <div class="col-md-8 offset-md-4">

                                <button type="submit" class="btn btn-primary">

                                    Update Password

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>
{{--@endsection--}}
</body>

<script>w
    setTimeout(function() {
        $('.alert').remove();
    }, 8000);
    setTimeout(function() {
        $('#Bem').remove();
    }, 8000);
</script>
</html>

{{--@section('content')--}}

{{--    <div class="container">--}}

{{--        <div class="row justify-content-center">--}}

{{--            <div class="col-md-8">--}}

{{--                <div class="card">--}}

{{--                    <div class="card-header">Laravel - Change Password with Current Password Validation Example - HDTuto.com</div>--}}



{{--                    <div class="card-body">--}}

{{--                        <form method="POST" action="{{ route('change.password') }}">--}}

{{--                            @csrf--}}



{{--                            @foreach ($errors->all() as $error)--}}

{{--                                <p class="text-danger">{{ $error }}</p>--}}

{{--                            @endforeach--}}



{{--                            <div class="form-group row">--}}

{{--                                <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>--}}



{{--                                <div class="col-md-6">--}}

{{--                                    <input id="password" type="password" class="form-control" name="current_password" autocomplete="current_password">--}}

{{--                                </div>--}}

{{--                            </div>--}}



{{--                            <div class="form-group row">--}}

{{--                                <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>--}}



{{--                                <div class="col-md-6">--}}

{{--                                    <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">--}}

{{--                                </div>--}}

{{--                            </div>--}}



{{--                            <div class="form-group row">--}}

{{--                                <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>--}}



{{--                                <div class="col-md-6">--}}

{{--                                    <input id="new_confirm_password" type="password" class="form-control" name=" " autocomplete="current-password">--}}

{{--                                </div>--}}

{{--                            </div>--}}



{{--                            <div class="form-group row mb-0">--}}

{{--                                <div class="col-md-8 offset-md-4">--}}

{{--                                    <button type="submit" class="btn btn-primary">--}}

{{--                                        Update Password--}}

{{--                                    </button>--}}

{{--                                </div>--}}

{{--                            </div>--}}

{{--                        </form>--}}

{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}

{{--@endsection--}}
