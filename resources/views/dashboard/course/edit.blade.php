@extends('layouts.master')

@section('title', 'Course')

@section('css')
@endsection


@section('breadcrumb-title')
    <h3>Course</h3>
@endsection


@section('breadcrumb-items')
    
    <li class="breadcrumb-item">Course</li>
    <li class="breadcrumb-item active">Edit</li>
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
                        <form class="row g-3" action="{{ route('dashboard.user.update', $user->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-12">
                                <label class="form-label" for="role">Role :<span class="text-danger">*</span> </label>
                                <select class="form-control @error('roles') is-invalid @enderror" name="roles"
                                    id="roles" required>
                                    <option value="" selected disabled>Select Role...
                                    </option>
                                    @if (isset($roles) && count($roles) > 0)
                                        @foreach ($roles as $role)
                                            <option value="{{ $role }}"
                                                {{ in_array($role, $userRoles) ? 'selected' : '' }}>
                                                {{ $role }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('roles')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="name">Name :<span class="text-danger">*</span> </label>
                                <input class="form-control @error('name') is-invalid @enderror" id="name"
                                    type="text" placeholder="Enter Name" name="name"
                                    value="{{ old('name') ?? $user->name }}" aria-label="Enter Name" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="email">Email :<span class="text-danger">*</span> </label>
                                <input class="form-control @error('email') is-invalid @enderror" id="email"
                                    type="email" placeholder="Enter Email" name="email"
                                    value="{{ old('email') ?? $user->email }}" aria-label="Enter Email" disabled>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="password">Password :<span class="text-danger">*</span>
                                </label>
                                <input class="form-control @error('password') is-invalid @enderror" id="password"
                                    type="password" placeholder="Enter Password" name="password"
                                    value="{{ old('password') }}" aria-label="Enter Password">
                                <small>leave blank if you don't want to change it.</small>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="password_confirmation">Confirm Password :<span
                                        class="text-danger">*</span> </label>
                                <input class="form-control @error('password_confirmation') is-invalid @enderror"
                                    id="password_confirmation" type="password" placeholder="Enter Confirm Password"
                                    name="password_confirmation" value="{{ old('password_confirmation') }}"
                                    aria-label="Enter Confirm Password">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Update</button>
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
