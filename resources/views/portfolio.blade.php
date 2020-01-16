@extends('layouts.website')

@section('page-title', 'Portfolio - ')

@section('navigation')
<nav id='navigation' class='custom-navbar d-flex flex-row align-items-center' role='navigation'>
    <a class="navbar-logo" href="{{ route('www.portfolio') }}">
        <img src="{{ asset('/img/3dm-logo-navigation.svg') }}" alt='3dm-logo'>
    </a>
    <a class='navbar-menu' href="{{ route('www.more') }}">
        En savoir plus
    </a>
</nav>
@endsection

@section('content')
<div class='container-fluid fullscreen-img' style="background-image: url( '{{asset('/img/156_Ipsach_WR_exterieur_v3.jpg')}}')">
    <div class='down-arrow d-flex justify-content-center'>
        <img src="{{ asset('/img/3dm-down-arrow.svg') }}" alt='down-arrow'>
    </div>
</div>
<div style="height: 2000px"></div>
@endsection
