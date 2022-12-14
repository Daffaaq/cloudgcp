@extends('layouts.auth')

@section('content')
<section class="login-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form class="md-float-material form-material" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="text-center">
                        <img src="{{ asset('images/png/logo.png') }}" alt="logo.png">
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Sign up</h3>
                                </div>
                            </div>
                            <p class="text-muted text-center p-b-5">Sign up to have an access in this system</p>
                            <div class="form-group form-primary">
                                <input 
                                    type="text" 
                                    class="form-control @error('name') is-invalid fill @enderror {{ old('name') != null ? 'fill' : '' }}" 
                                    name="name" 
                                    value="{{ old('name') }}" 
                                    required 
                                    autocomplete="name">
                                <span class="form-bar"></span>
                                <label class="float-label">Name</label>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group form-primary">
                                <input 
                                    type="text" 
                                    class="form-control @error('username') is-invalid fill @enderror {{ old('username') != null ? 'fill' : '' }}" 
                                    name="username" 
                                    value="{{ old('username') }}" r
                                    equired 
                                    autocomplete="username">
                                <span class="form-bar"></span>
                                <label class="float-label">Username</label>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group form-primary">
                                <input 
                                    type="email" 
                                    class="form-control @error('email') is-invalid fill @enderror {{ old('email') != null ? 'fill' : '' }}" 
                                    name="email" 
                                    value="{{ old('email') }}" 
                                    required 
                                    autocomplete="email">
                                <span class="form-bar"></span>
                                <label class="float-label">Email Address</label>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-primary">
                                        <input 
                                            type="password" 
                                            class="form-control @error('password') is-invalid @enderror" 
                                            name="password" 
                                            required 
                                            autocomplete="new-password">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Password</label>
                                    </div>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-primary">
                                        <input 
                                            type="password" 
                                            class="form-control" 
                                            name="password_confirmation" 
                                            required 
                                            autocomplete="new-password">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Confirm Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                        Sign up now
                                    </button>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Already have an account?</p>
                                    <p class="text-inverse text-left"><a href="{{ route('login') }}"><b>Login</b></a></p>
                                </div>
                                <div class="col-md-2">
                                    <img src="{{ asset('images/png/logo-small-bottom.png') }}" alt="small-logo.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
