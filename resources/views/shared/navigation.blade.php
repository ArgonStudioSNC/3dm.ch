<nav id='navigation'>
    <div class='custom-navbar d-flex flex-row align-items-center' role='navigation'>
        <a class="navbar-logo smooth-scrolling" href="{{ $route }}">
            <img src="{{ asset('storage/icons/3dm-navbar.svg') }}" alt='[Logo du menu de navigation]'>
        </a>
        <a class='navbar-menu' href="{{ $route }}">
            {{ $text }}
        </a>
    </div>
</nav>
