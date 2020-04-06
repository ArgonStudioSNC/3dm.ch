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

    <!-- Message -->
    @if(Session::has('message'))
        <p >{{ Session::get('message') }}</p>
    @endif

    <!-- Form -->
    <form method='post' action={{ route('admin.uploadFile') }} enctype='multipart/form-data' >
        {{ csrf_field() }}
        <input type='file' name='file' >
        <input type='submit' name='submit' value='Import'>
    </form>

@endsection
