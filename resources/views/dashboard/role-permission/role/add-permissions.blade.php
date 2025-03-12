@extends('layouts.master')

@section('title', 'Give Permission')

@section('css')
@endsection


@section('breadcrumb-title')
    <h3>Give Permission</h3>
@endsection


@section('breadcrumb-items')
    
    <li class="breadcrumb-item">Role</li>
    <li class="breadcrumb-item active">Give Permission</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card height-equal">
                <div class="card-header">
                    <h4>{{ ucfirst($role->name) }}</h4>
                    <p class="f-m-light mt-1"></p>
                </div>
                <div class="card-body custom-input">
                    <form class="row g-3" action="{{ route('dashboard.roles.give_permissions',$role->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-12">

                            <label class="form-label" for="name">Permissions :<span class="text-danger">*</span></label>

                            <div class="row">
                                @foreach ($permissions as $key => $permission)
                                <div class="col-md-3">
                                    <div class="form-check checkbox checkbox-primary mb-0">
                                        <input 
                                            class="form-check-input" 
                                            id="checkbox-primary-{{$key}}" 
                                            type="checkbox" 
                                            name="permission[]" 
                                            value="{{ $permission->name }}"
                                            {{ in_array($permission->id, $rolePermissions) ? 'checked':'' }}
                                        >
                                        <label class="form-check-label" for="checkbox-primary-{{$key}}">{{ $permission->name }}</label>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-12">
                            @error('permission')
                                <span class="text-danger">{{ $message }}</span>
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