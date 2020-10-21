@extends('layouts.website')

@section('page-title', 'Page indisponible - ')

@section('content')
    @include('shared.navigation', ['text' => 'Portfolio', 'route' => route('www.portfolio')])

    <div id='not-found'>
        <div class="text-center">
            <h1><img class="image-404" src="{{ asset('/media/404-yeti.svg') }}"></h1>
            <h1>Cette page n’est malheureusement pas disponible.</h1>
            <p>Le lien que vous avez suivi est peut-être rompu, ou la page a été supprimée.</p>
            <a class="link-arrowed" href="{{route('www.portfolio')}}">revenir à 3DM
                <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <g fill="none" stroke-width="1.4" stroke-linejoin="round" stroke-miterlimit="10">
                        <path class="arrow-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                    </g>
                </svg>
            </a>
        </div>
    </div>
@endsection
