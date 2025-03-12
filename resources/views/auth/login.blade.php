@extends('layouts.authentication.master')
@section('title', 'Login')

@section('css')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-xl-12 p-0">
                <div class="login-card">
                    <div>
                        <div><a class="logo" href="{{ route('login') }}"><img class="img-fluid for-light"
                                    src="{{ asset('assets/images/logo/logo.png') }}" alt="looginpage"><img
                                    class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                                    alt="looginpage"></a></div>
                        <div class="login-main">
                            <form class="theme-form" id="login-form" method="POST"
                                action="{{ route('login.attempt') }}">
                                <h4>Sign in to account</h4>
                                <p>Enter your email & password to login</p>
                                @csrf
                                <div class="form-group">
                                    <label for="email" class="col-form-label">{{ __('Email Address') }}</label>
                                    <input id="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" type="email" value="{{ old('email') }}" required
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
                                        <input id="password"
                                            class="form-control @error('password') is-invalid @enderror" type="password"
                                            name="password" required autocomplete="current-password"
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
                                    @if (Route::has('password.request'))
                                        <a class="link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    <div class="text-end mt-3">
                                        <button class="btn btn-primary btn-block w-100"
                                            type="submit">{{ __('Sign in') }}</button>
                                    </div>
                                </div>
                                <h6 class="text-muted mt-4 or">Or Sign in with</h6>

                                <div class="social mt-4">
                                    <div class="btn-showcase">
                                        <a href="javacript:">
                                            <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png"
                                                style="margin-left: 3em;">
                                        </a>

                                        <a class="btn btn-light" href="javacript:" target="_blank"
                                            id="btn-fblogin"><i class="txt-fb" data-feather="facebook"
                                                aria-hidden="true"></i>facebook</a>
                                    </div>
                                </div>
                                <p class="mt-4 text-center">Don't have account?<a class="ms-2"
                                        href="{{ route('register') }}">Create Account</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript"></script>
@endsection