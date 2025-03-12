@extends('layouts.errors.master')
@section('title', 'Error 429')

@section('css')
@endsection

@section('css')
@endsection


@section('content')
<div class="page-wrapper compact-wrapper" id="pageWrapper">
  <!-- error-429 start-->
  <div class="error-wrapper">
    <div class="container"><img class="img-100" src="{{asset('assets/images/other-images/sad.png')}}" alt="">
      <div class="error-heading">
        <h2 class="headline font-danger">429</h2>
      </div>
      <div class="col-md-8 offset-md-2">
        <p class="sub-content">{{__('Too Many Requests')}}</p>
        <p class="sub-content">{{__("You've sent too many requests in a given amount of time. Please try again later.")}}</p>
      </div>
      <div><a class="btn btn-danger-gradien btn-lg" href="{{route('dashboard')}}">{{__('BACK TO HOME PAGE')}}</a></div>
    </div>
  </div>
  <!-- error-429 end      -->
</div>
@endsection

@section('script')

@endsection