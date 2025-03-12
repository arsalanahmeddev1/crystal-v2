@extends('layouts.master')

@section('title', 'Courses')

@section('css')
@endsection


@section('breadcrumb-title')
    <h3>Courses</h3>
@endsection


@section('breadcrumb-items')
    
    <li class="breadcrumb-item active">Courses</li>
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h4></h4>
                        <span></span>
                        <a class="btn btn-primary" href="{{route('dashboard.course.create')}}">Create</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($courses) && count($courses) > 0)
                                        @foreach($courses as $key => $course)
                                            <tr>
                                                <td>{{ $course->name }}</td>
                                                {{-- <td>
                                                    <span class="fw-bold">{{ $course->email ?? '-' }}</span>
                                                </td> --}}
                                                <td>
                                                    <ul class="action">
                                                        @can('update course')
                                                        <li class="edit"><a href="{{route('dashboard.course.edit',[$course->id])}}"><i class="icon-pencil-alt"></i></a></li>
                                                        @endcan

                                                        @can('delete course')
                                                        <li class="delete">
                                                            <form action="{{ route('dashboard.course.destroy', $course->id) }}"
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
