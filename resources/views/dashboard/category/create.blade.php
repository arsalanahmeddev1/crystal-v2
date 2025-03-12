@extends('layouts.master')

@section('title', 'Category')

@section('css')
@endsection


@section('breadcrumb-title')
    <h3>Category</h3>
@endsection


@section('breadcrumb-items')
    
    <li class="breadcrumb-item">Category</li>
    <li class="breadcrumb-item active">Create</li>
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
                        <form class="row g-3" action="{{ route('dashboard.category.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="col-12">
                                <label class="form-label" for="name">Name :<span class="text-danger">*</span> </label>
                                <input class="form-control @error('name') is-invalid @enderror" id="name"
                                    type="text" placeholder="Enter Name" name="name" value="{{ old('name') }}"
                                    aria-label="Enter Name" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="parent_category_id">Parent Category : </label>
                                <select class="form-control @error('parent_category_id') is-invalid @enderror"
                                    name="parent_category_id" id="parent_category_id">
                                    <option value="" selected disabled>Select Parent Category...</option>
                                    @if (isset($categories) && count($categories) > 0)
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('parent_category_id')
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
