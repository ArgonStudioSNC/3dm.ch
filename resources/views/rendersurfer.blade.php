@extends('layouts.app')

@section('content')
<div class="card">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    You are logged in!
</div>

<div id="app">
    <router-view></router-view>
</div>

@endsection
