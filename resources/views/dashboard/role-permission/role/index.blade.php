@extends('layouts.master')

@section('title', 'Role')

@section('css')
@endsection


@section('breadcrumb-title')
    <h3>Role</h3>
@endsection


@section('breadcrumb-items')
    
    <li class="breadcrumb-item active">Role</li>
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h4></h4>
                        <span></span>
                        <a class="btn btn-primary" href="{{route('dashboard.roles.create')}}">Create</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th width="40%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($roles) && count($roles) > 0)
                                    @foreach($roles as $key => $role)
                                            <tr>
                                                <td>{{ $role->name }}</td>
                                                <td>
                                                    <ul class="action">
                                                        <li><a href="{{ route('dashboard.roles.add_permissions',$role->id) }}" class="btn btn-primary">Permissions</a></li>

                                                        @can('update role')
                                                            <li class="edit"><a href="{{route('dashboard.roles.edit',[$role->id])}}" class="btn btn-primary">Edit</a></li>
                                                        @endcan

                                                        @can('delete role')
                                                            <li class="delete">
                                                                <form action="{{ route('dashboard.roles.destroy', $role->id) }}"
                                                                    method="POST">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-primary">Delete</button>
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
