{{--@extends('layouts.app')--}}

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
    {{--    <script src='https://kit.fontawesome.com/a076d05399.js'></script>--}}
    {{--    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">--}}
    {{--    <link rel="stylesheet" href="/resources/demos/style.css">--}}
    {{--    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}
    {{--    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>--}}
</head>
<body>
<div id="app">



{{--    <main class="py-4 mt-5>--}}
        <div class="container" style="margin-top: 13w0px;">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center mb-3"><img src="{{asset('images/logo/JCS_LOGO.png')}}" alt="" width="150px;"height="100px;"></div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    {{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                                    <div class="col-md-12">
                                        <input placeholder="Email" id="email" type="email" class="text-center form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    {{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                                    <div class="col-md-12">
                                        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror text-center" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                {{--                        <div class="form-group row">--}}
                                {{--                            <div class="col-md-6 offset-md-4">--}}
                                {{--                                <div class="form-check">--}}
                                {{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                                {{--                                    <label class="form-check-label" for="remember">--}}
                                {{--                                        {{ __('Remember Me') }}--}}
                                {{--                                    </label>--}}
                                {{--                                </div>--}}
                                {{--                            </div>--}}
                                {{--                        </div>--}}

                                <div class="form-group row mb-0">
                                    <div class="col-md-12 ">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            {{ __('Login') }}
                                        </button>

                                        {{--                                @if (Route::has('password.request'))--}}
                                        {{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                        {{--                                        {{ __('Forgot Your Password?') }}--}}
                                        {{--                                    </a>--}}
                                        {{--                                @endif--}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--    </main>--}}
</div>
</body>

<script>
    setTimeout(function() {
        $('.alert').remove();
    }, 3000);
    setTimeout(function() {
        $('#Bem').remove();
    }, 3000);
</script>
</html>

