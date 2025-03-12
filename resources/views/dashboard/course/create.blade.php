@extends('layouts.master')

@section('title', 'Course')

@section('css')
@endsection


@section('breadcrumb-title')
    <h3>Course</h3>
@endsection


@section('breadcrumb-items')
    
    <li class="breadcrumb-item">Course</li>
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
                        <form class="row g-3" action="{{ route('dashboard.course.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="col-12">
                                <label class="form-label" for="title">Title :<span class="text-danger">*</span> </label>
                                <input class="form-control @error('title') is-invalid @enderror" id="title"
                                    type="text" placeholder="Enter Title" name="title" value="{{ old('title') }}"
                                    aria-label="Enter Title" required>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="category_id">Category : </label>
                                <select class="form-control @error('category_id') is-invalid @enderror"
                                    name="category_id" id="category_id">
                                    <option value="" selected disabled>Select Category...</option>
                                    @if (isset($categories) && count($categories) > 0)
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="description">Description :<span class="text-danger">*</span> </label>
                                <textarea class="ckeditor-editor" placeholder="Enter Description" name="description" id="description"></textarea>
                            </div>
                            <div class="col-12">
                                {{-- feature_details	 --}}
                            </div>
                            <div class="col-12">
                                {{-- price --}}
                            </div>
                            <div class="col-12">
                                {{-- learner_accessibility --}}
                            </div>
                            <div class="col-12">
                                {{-- image	 --}}
                            </div>
                            <div class="col-12">
                                {{-- status	 --}}
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
