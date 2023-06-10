@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-------Image-------->
                    <img src="images/whitz.png" alt="">
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('login') }}" method="POST">


                        @csrf
                        <input type="hidden" name="user_type" value="client">
                        <div class="input-box">
                            <header>{{ __('Log in To CollabRent') }}</header>
                            <div class="input-field">
                                <input type="text" class="input @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="off">
                                <label for="email">Email</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-field">
                                <input type="password" class="input @error('password') is-invalid @enderror" id="password" name="password" required>
                                <label for="password">Password</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- <div class="input-field">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div> -->
                            <div class="input-field">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">Forgot Your Password?</a><br>
                                @endif
                            </div>

                            <div class="input-field">
                                <input type="submit" class="submit" name="submit" value="Log in">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
