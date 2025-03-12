@extends('layouts.authentication.master')
@section('title', 'Admin Login')

@section('css')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7"><img class="bg-img-cover bg-center" src="{{ asset('assets/images/login/2.jpg') }}"
                    alt="looginpage"></div>
            <div class="col-xl-5 p-0">
                <div class="login-card">
                    <div>
                        <div><a class="logo" href="{{ route('login') }}"><img class="img-fluid for-light"
                                    src="{{ asset('assets/images/logo/login.png') }}" alt="looginpage"><img
                                    class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                                    alt="looginpage"></a></div>
                        <div class="login-main">
                            <form class="theme-form" id="login-form" method="POST"
                                action="{{ route('dashboard.login.attempt') }}">
                                <h4>Sign in to account</h4>
                                <p>Enter your email & password to login</p>
                                @csrf
                                <div class="form-group">
                                    <label for="email" class="col-form-label">{{ __('Email Address') }}</label>
                                    <input id="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" type="email" value="{{ $admin->email ?? old('email') }}" required
                                        autocomplete="email" autofocus placeholder="example@gmail.com">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-form-label">{{ __('Password') }}</label>
                                    <div class="form-input position-relative">
                                        <input id="password" class="form-control @error('password') is-invalid @enderror"
                                            type="password" name="password" required autocomplete="current-password" value="{{ $admin->email ?? '' }}"
                                            placeholder="*********">
                                        <div class="show-hide"><span class="show"> </span></div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <div class="checkbox p-0">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="text-muted"for="remember">{{ __('Remember password') }}</label>
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit"> {{ __('Sign in') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
