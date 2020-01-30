@extends('layouts.website')

@section('content')

@include('shared.navigation', ['text' => 'En savoir plus', 'routeLogo' => route('www.portfolio'), 'routeBar' => route('www.more')])

@include('shared.portfolio-content')

@endsection
