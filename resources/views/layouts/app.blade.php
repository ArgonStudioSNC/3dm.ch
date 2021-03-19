<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title'){{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}" defer></script>
    <script src="{{ mix('js/rendersurfer.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/rendersurfer.css') }}" rel="stylesheet" type="text/css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>
<body>
    <nav class="user-nav">
        <ul class="menu simple align-right">
            @guest
                <li>
                    <!--<a href="{{ route('login') }}">{{ __('auth.Login') }}</a>-->
                </li>
                @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}">{{ __('auth.Register') }}</a>
                    </li>
                @endif
            @else
                <li class="menu-text">
                    <div>
                        <i class="fas fa-user"></i>&nbsp;
                        {{ Auth::user()->name }}
                    </div>
                </li>
                <li>
                    <div>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        {{ __('auth.Logout') }}
                        </a>

                        <form id='logout-form' action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <script>
        window._locale = '{{ app()->getLocale() }}';
        window._translations = {!! cache('translations') !!};
    </script>

</body>
</html>
