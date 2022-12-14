@extends('layouts.auth')

@section('title', '- Login')
    
@section('content')
<section class="login-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form class="md-float-material form-material" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="text-center">
                        <img src="{{ asset('images/png/logo.png') }}" alt="logo.png">
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Sign In</h3>
                                </div>
                            </div>
                            <p class="text-muted text-center p-b-5">Sign in to start your journey</p>
                            <div class="form-group form-primary">
                                <input type="text" class="form-control {{ $errors->has('username') || $errors->has('email') ? 'is-invalid fill' : '' }}" name="login" value="{{ old('username') ? old('username') : old('email')  }}" required>
                                <span class="form-bar"></span>
                                <label class="float-label">Username or Email</label>

                                @if ($errors->has('username') || $errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') ? $errors->first('username') : $errors->first('email')  }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group form-primary">
                                <input type="password" class="form-control @error('password') is-invalid fill @enderror" name="password" required autocomplete="current-password">
                                <span class="form-bar"></span>
                                <label class="float-label">Password</label>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row m-t-25 text-left">
                                <div class="col-12">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label>
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <span class="cr"><i
                                                    class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                            <span class="text-inverse">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="forgot-phone text-right float-right">
                                        @if (Route::has('password.request'))
                                            <a class="text-right f-w-60" href="{{ route('password.request') }}">
                                                Forgot Password?
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit"
                                        class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                                </div>
                            </div>
                            <p class="text-inverse text-left">Don't have an account?
                                <a href="{{ route('register') }}"> <b>Register here </b></a>
                                for free!
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
