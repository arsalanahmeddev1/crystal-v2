@extends('layouts.authentication.master')
@section('title', 'Login')

@section('css')
@endsection

@section('content')
    <div class="page-wrapper">
        <div class="container-fluid p-0">
            <!-- Unlock page start-->
            <div class="authentication-main mt-0">
                <div class="row">
                    <div class="col-12">
                        <div class="login-card login-dark">
                            <div>
                                <div><a class="logo" href="javacript:"><img class="img-fluid for-light"
                                            src="{{ asset('assets/images/logo/logo.png') }}" alt="looginpage"><img
                                            class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                                            alt="looginpage"></a></div>
                                <div class="login-main text-center">
                                    <h4>{{ __('Verify Your Email Address') }}</h4>

                                    @if (session('resent'))
                                        <div class="alert alert-success" role="alert">
                                            {{ __('A fresh verification link has been sent to your email address.') }}
                                        </div>
                                    @endif

                                    <p>
                                        {{ __('Before proceeding, please check your email for a verification link.') }}
                                        {{ __('If you did not receive the email') }},
                                    </p>
                                    <form class="theme-form d-inline" method="POST"
                                        action="{{ route('verification.send') }}">
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-primary btn-block w-100">{{ __('click here to request another') }}</button>.
                                    </form>
                    
                                    <a class="btn btn-primary btn-block w-100" href="{{route('logout')}}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">{{__('Logout')}}</a>
                                    <form action="{{ route('logout') }}" id="logout-form" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Unlock page end-->
            <!-- page-wrapper Ends-->
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript"></script>
@endsection
