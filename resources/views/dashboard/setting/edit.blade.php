@extends('layouts.master')

@section('title', 'Setting')

@section('css')
@endsection


@section('breadcrumb-title')
    <h3>Setting</h3>
@endsection


@section('breadcrumb-items')
    
    <li class="breadcrumb-item active">Setting</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card height-equal">
                    {{-- <div class="card-header">
                        <h4></h4>
                        <p class="f-m-light mt-1"></p>
                    </div> --}}
                    <div class="card-body custom-input">
                        <form class="row g-3" action="{{route('dashboard.setting.update',1)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-6">
                                <label class="form-label" for="company_name">Company Name :<span class="text-danger">*</span> </label>
                                <input class="form-control @error('company_name') is-invalid @enderror" id="company_name" type="text" placeholder="Company name" name="company_name" value="{{ $setting_data->name }}"
                                    aria-label="Company name" required>
                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="company_email">Company Email </label>
                                <input type="email" name="company_email" value="{{ $setting_data->email }}" class="form-control @error('company_email') is-invalid @enderror" id="company_email" placeholder="Company Email" />
                                @error('company_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="company_phonenumber">Company Phonenumber </label>
                                <input type="text" name="company_phonenumber" value="{{ $setting_data->phone_number }}" class="form-control @error('company_phonenumber') is-invalid @enderror" id="company_phonenumber"/>
                                @error('company_phonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="company_address">Company Address</label>
                                <input type="text" name="company_address" value="{{ $setting_data->address }}" class="form-control @error('company_address') is-invalid @enderror" id="company_address"/>
                                @error('company_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="col-6">
                                <label class="form-label" for="facebook_link">Facebook Link</label>
                                <input type="url" name="facebook_link" value="{{ $setting_data->facebook_link }}" class="form-control @error('facebook_link') is-invalid @enderror" id="facebook_link"/>
                                @error('facebook_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="pinterest_link">Pinterest Link</label>
                                <input type="url" name="pinterest_link" value="{{ $setting_data->pinterest_link }}" class="form-control @error('pinterest_link') is-invalid @enderror" id="pinterest_link"/>
                                @error('pinterest_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="instagram_link">Instagram_link</label>
                                <input type="url" name="instagram_link" value="{{ $setting_data->instagram_link }}" class="form-control @error('instagram_link') is-invalid @enderror" id="instagram_link"/>
                                @error('instagram_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="youtube_link">Youtube Link</label>
                                <input type="url" name="youtube_link" value="{{ $setting_data->youtube_link }}" class="form-control @error('youtube_link') is-invalid @enderror" id="youtube_link"/>
                                @error('youtube_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="tiktok_link">Tiktok Link</label>
                                <input type="url" name="tiktok_link" value="{{ $setting_data->tiktok_link }}" class="form-control @error('tiktok_link') is-invalid @enderror" id="tiktok_link"/>
                                @error('tiktok_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="twitter_link">Twitter Link</label>
                                <input type="url" name="twitter_link" value="{{ $setting_data->twitter_link }}" class="form-control @error('twitter_link') is-invalid @enderror" id="twitter_link"/>
                                @error('twitter_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="linkedin_link">Linkedin Link</label>
                                <input type="url" name="linkedin_link" value="{{ $setting_data->linkedin_link }}" class="form-control @error('linkedin_link') is-invalid @enderror" id="linkedin_link"/>
                                @error('linkedin_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="telegram_link">Telegram Link</label>
                                <input type="url" name="telegram_link" value="{{ $setting_data->telegram_link }}" class="form-control @error('telegram_link') is-invalid @enderror" id="telegram_link"/>
                                @error('telegram_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            <div class="col-6">
                                <label class="form-label" for="light_logo_path">Light Logo :</label>

                                @if(isset($setting_data->logo_light) && !empty($setting_data->logo_light))
                                    <div class="item col-12 col-md-6 col-lg-4 mb-4 text-center Branding">                                       
                                        <img width="200px" height="200px" src="{{asset($setting_data->logo_light)}}" alt="" class="portfolioImage img-fluid mb-2">
                                    </div>
                                    {{-- <input type="hidden" name="old_light_logo_path" value="{{ $setting_data->logo_light }}"
                                        class="form-control"/> --}}
                                @endif
                                <input accept="image/*" type="file"  name="light_logo_path"
                                    class="form-control @error('light_logo_path') is-invalid @enderror" id="light_logo_path"/>
                                @error('light_logo_path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="dark_logo_path">Dark Logo :</label>

                                @if(isset($setting_data->logo_dark) && !empty($setting_data->logo_dark))
                                    <div class="item col-12 col-md-6 col-lg-4 mb-4 text-center Branding">                                       
                                        <img width="200px" height="200px" src="{{asset($setting_data->logo_dark)}}" alt="" class="portfolioImage img-fluid mb-2">
                                    </div>
                                    {{-- <input type="hidden" name="old_dark_logo_path" value="{{ $setting_data->logo_dark }}"
                                        class="form-control"/> --}}
                                @endif
                                <input accept="image/*" type="file"  name="dark_logo_path"
                                    class="form-control @error('dark_logo_path') is-invalid @enderror" id="dark_logo_path"/>
                                @error('dark_logo_path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="fav_path">Favicon :</label>
                                @if(isset($setting_data->favicon) && !empty($setting_data->favicon))
                                    <div class="item col-12 col-md-6 col-lg-4 mb-4 text-center Branding">                                       
                                        <img width="200px" height="200px" src="{{asset($setting_data->favicon)}}" alt="" class="portfolioImage img-fluid mb-2">
                                    </div>
                                    {{-- <input type="hidden" name="old_fav_path" value="{{ $setting_data->favicon }}"
                                        class="form-control"/> --}}
                                @endif
                                <input accept="image/*" type="file"  name="fav_path"
                                    class="form-control @error('fav_path') is-invalid @enderror" id="fav_path"/>
                                @error('fav_path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
