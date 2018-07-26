<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ trans('common.laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">{{ trans('common.home') }}</a>
                    @else
                        <a href="{{ route('login') }}">{{ trans('common.login') }}</a>
                        <a href="{{ route('register') }}">{{ trans('common.register') }}</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{ trans('common.laravel') }}
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">{{ trans('common.documentation') }}</a>
                    <a href="https://laracasts.com">{{ trans('common.news') }}</a>
                    <a href="https://laravel-news.com">{{ trans('common.forge') }}</a>
                    <a href="https://forge.laravel.com">{{ trans('common.github') }}</a>
                    <a href="https://github.com/laravel/laravel">{{ trans('common.laravel') }}</a>
                </div>
            </div>
        </div>
    </body>
</html>
