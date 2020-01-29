<nav id='navigation'>
    <div class='custom-navbar d-flex flex-row align-items-center' role='navigation'>
        <a class="navbar-logo smooth-scrolling" href="{{ route('www.portfolio') }}">
            <img src="{{ asset('/img/3dm-logo-navigation.svg') }}" alt='3dm-logo'>
        </a>
        <a class='navbar-menu' href="{{ $route }}">
            {{ $text }}
        </a>
    </div>
</nav>
