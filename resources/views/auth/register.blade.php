{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.authentication.master')
@section('title', 'Registration')

@section('css')
@endsection

@section('content')
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-xl-12 p-0">
                <div class="login-card">
                    <div>
                        <div><a class="logo" href="{{ route('register') }}"><img class="img-fluid for-light"
                                    src="{{ asset('assets/images/logo/logo.png') }}" alt="looginpage"><img
                                    class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                                    alt="looginpage"></a></div>
                        <div class="login-main">
                            <form class="theme-form" method="POST" action="{{ route('register.attempt') }}">
                                <h4>Create your account</h4>
                                <p>Enter your personal details to create account</p>
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="col-form-label pt-0">{{ __('Your Name') }}</label>
                                    <div class="row g-2">
                                        <div class="col-12">
                                            <input id="name" class="form-control @error('name') is-invalid @enderror"
                                                name="name" type="text" value="{{ old('name') }}" required
                                                autocomplete="name" autofocus placeholder="First name">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">{{ __('Email Address') }}</label>
                                    <input id="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" type="email" value="{{ old('email') }}" required
                                        autocomplete="email" placeholder="example@gmail.com">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">{{ __('Password') }}</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control @error('password') is-invalid @enderror" id="password"
                                            type="password" name="password" required autocomplete="new-password"
                                            placeholder="*********">
                                        <div class="show-hide"><span class="show"></span></div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm"
                                        class="col-form-label">{{ __('Confirm Password') }}</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control @error('password_confirmation') is-invalid @enderror" id="password-confirm" type="password"
                                            name="password_confirmation" required autocomplete="new-password"
                                            placeholder="*********">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="checkbox p-0">
                                        <input id="checkbox1" type="checkbox" name="agreed_with_privacy" class="@error('agreed_with_privacy') is-invalid @enderror" {{ old('agreed_with_privacy') == 'on' ? 'checked' : '' ; }}>
                                        <label class="text-muted" for="checkbox1">Agree with<a class="ms-2"
                                                href="javascript:;">Privacy Policy</a></label>
                                        @error('agreed_with_privacy')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary w-100 btn-block" type="submit">
                                        {{ __('Create Account') }}</button>
                                </div>
                                <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2"
                                        href="{{ route('login') }}">Sign in</a></p>
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
