@extends('layouts.master')

@section('title', 'Category')

@section('css')
@endsection


@section('breadcrumb-title')
    <h3>Category</h3>
@endsection


@section('breadcrumb-items')
    
    <li class="breadcrumb-item active">Category</li>
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h4></h4>
                        <span></span>
                        <a class="btn btn-primary" href="{{route('dashboard.category.create')}}">Create</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Parent</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($categories) && count($categories) > 0)
                                        @foreach($categories as $key => $category)
                                            <tr>
                                                <td>{{ $category->name }}</td>
                                                <td>
                                                    <span class="fw-bold">{{ $category->parent->name ?? '-' }}</span>
                                                </td>
                                                <td>
                                                    <ul class="action">
                                                        @can('update category')
                                                        <li class="edit"><a href="{{route('dashboard.category.edit',[$category->id])}}"><i class="icon-pencil-alt"></i></a></li>
                                                        @endcan

                                                        @can('delete category')
                                                        <li class="delete">
                                                            <form action="{{ route('dashboard.category.destroy', $category->id) }}"
                                                                method="POST">
                                                                @method('DELETE')
                                                                @csrf
                                                                <i type="submit" class="delete_confirmation icon-trash"></i>
                                                            </form>
                                                        </li>
                                                        @endcan
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
