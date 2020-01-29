<nav id='navigation'>
    <div class='custom-navbar d-flex flex-row align-items-center' role='navigation'>
        <a class="navbar-logo smooth-scrolling" href="{{ route('www.portfolio') }}">
            <img src="{{ asset('/media/branding/3dm-logo-menu.svg') }}" alt='[Logo du menu de navigation]'>
        </a>
        <a class='navbar-menu' href="{{ $route }}">
            {{ $text }}
        </a>
    </div>
</nav>
