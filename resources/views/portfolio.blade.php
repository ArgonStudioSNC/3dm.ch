@extends('layouts.website')

@section('content')

@include('shared.navigation', ['text' => 'En savoir plus', 'route' => route('www.more')])

@include('shared.portfolio-content')

@endsection
