@extends('layouts.app')

@section('content')
    <div class="my-login-card grid-container">
        <div class="card">
            <div class="card-divider">
                <h5>{{ __('auth.Login') }} - 3DM Rendersurfer</h5>
            </div>

            <div class="card-section">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <label>{{ __('auth.E-Mail Address') }}
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </label>

                    <label>{{ __('auth.Password') }}
                        <input id="password" type="password" name="password" required>
                    </label>

                    <div><input id="remember" type="checkbox" name="remember"><label for="remember">{{ __('auth.Remember Me') }}</label></div>

                    <input id="remember" type="submit" class="button" value="{{ __('auth.Login') }}">
                </form>
            </div>
        </div>
    </div>
@endsection
