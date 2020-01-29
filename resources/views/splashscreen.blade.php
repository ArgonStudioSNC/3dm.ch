@extends('layouts.website')

@section('content')

@include('shared.navigation', ['text' => 'En savoir plus', 'route' => route('www.more')])
<script>
    $("#navigation").css("display", "none");
</script>

<div id='splashscreen' class="container-fluid">
    <img class="img-fluid" src="{{ asset('/media/branding/3dm-logo-grand.svg') }}" alt="[Logo de 3DM]">
</div>
<script>history.scrollRestoration = "manual"</script>

@include('shared.portfolio-content')

@endsection
