@extends('layouts.authentication.master')
@section('title', 'Unlock')

@section('css')
<style>
   .login-card .login-main {
      min-width: 500px !important;
   }
</style>
@endsection

@section('css')
@endsection


@section('content')
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper">
   <div class="container-fluid p-0">
      <!-- Unlock page start-->
      <div class="authentication-main mt-0">
         <div class="row">
            <div class="col-12">
               <div class="login-card">
                  <div>
                     <div><a class="logo" href="{{ route('dashboard') }}"><img class="img-fluid for-light" src="{{asset('assets/images/logo/login.png')}}" alt="looginpage"><img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt="looginpage"></a></div>
                     <div class="login-main">
                        <form class="theme-form" id="verification-form" action="{{route('verify.account')}}" method="POST">
                           <meta name="csrf-token" content="{{ csrf_token()}}">
                           @csrf
                           <h4 class="text-center"><i class="icon-unlock"></i> Two-Factor Authentication</h4>
                           <p class="text-center my-3">A unique code has been sent to your email address. Please check your inbox and enter the code below to complete the login process. <br><span class="badge badge-info">{{Auth::user()->email}}</span></p>
                           <input type="hidden" name="verfication_user_id" id="verfication_user_id" value="{{Auth::user()->id}}">
                           <div class="form-group">
                              <label class="col-form-label">Enter your code*</label>
                              <input class="form-control @error('code') is-invalid @enderror"
                               autofocus autocomplete="code" placeholder="Authentication Code" value="{{Auth::user()->verification_code}}" type="text" name="code" id="code">
                              @error('code')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class=" form-group mb-0">
                              <button class="btn btn-primary btn-block w-100 mt-4 mb-2" type="submit">Verify</button>
                           </div>
                        </form>
                        <a class="btn btn-primary btn-block w-100" href="{{route('logout')}}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">{{__('Logout')}}</a>
                        <form action="{{ route('logout') }}" id="logout-form" method="POST" class="d-none">
                           @csrf
                        </form>
                        <p class="mt-4 mb-0 d-flex">Resend the Code?
                           <a class="ms-2" id="resent_code" href="javascript:;">resend code</a>
                           <span class="timer mx-2"><span>00</span>:<span id="count_down">60</span></span>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
      let form = $('verification-form').val();
      const elem = $('#count_down');
      let timeLeft = 60;
      let timerId;

      $('.timer').hide();

      $("#resent_code").on('click', function() {
         $('#resent_code').hide();
         $('.timer').show();

         timerId = setInterval(countdown, 1000);
         let id = $('#verfication_user_id').val();
         let formData = $('#verification-form').val();
         console.log(formData);
         $.ajax({
            type: "POST",
            url: "{{route('resend.code')}}",
            data: formData,
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
               setTimeout(function() {
                  location.reload();
               }, 30000);
               // console.log(response.message);
            }
         });
      });

      function countdown() {
         if (timeLeft === 0) {
            clearInterval(timerId);
            $('#resent_code').show();
            $('.timer').hide();
         } else {
            // Format timeLeft as a two-digit string
            const formattedTime = timeLeft.toString().padStart(2, '0');
            elem.html(formattedTime);
            timeLeft--;
         }
      }
   });
</script>
@endsection