@extends('layouts.website')

@section('content')

@include('shared.navigation', ['text' => 'En savoir plus', 'route' => route('www.more')])
<script>
    $("#navigation").css("display", "none");
</script>

<div id='splashscreen'>
    <div class="my-flex-logo d-flex justify-content-center align-items-center">
        <img src="{{ asset('/media/branding/3dm-logo-grand.svg') }}" alt="[Logo de 3DM]">
    </div>
</div>
<script>history.scrollRestoration = "manual"</script>

@include('shared.portfolio-content')

@endsection
