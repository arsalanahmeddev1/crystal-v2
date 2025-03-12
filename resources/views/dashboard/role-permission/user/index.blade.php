@extends('layouts.master')

@section('title', 'Users')

@section('css')
@endsection


@section('breadcrumb-title')
    <h3>Users</h3>
@endsection


@section('breadcrumb-items')

    <li class="breadcrumb-item active">Users</li>
@endsection

@section('content')

    <div class="container-fluid user-list-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border text-end card-no-border">
                        <h4></h4>
                        <span></span>
                        <a class="btn btn-primary" href="{{ route('dashboard.user.create') }}">Create</a>
                    </div>
                    <div class="card-body">
                        <div class="list-product user-list-table">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table" id="users-list">
                                    <thead>
                                        <tr>
                                            <th class="c-o-light f-w-600">Name</th>
                                            <th class="c-o-light f-w-600">Email</th>
                                            <th class="c-o-light f-w-600">Roles</th>
                                            <th class="c-o-light f-w-600">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($users) && count($users) > 0)
                                            @foreach ($users as $key => $user)
                                                <tr>
                                                    <td>{{ $user->name }}</td>
                                                    <td>
                                                        <span class="fw-bold">{{ $user->email ?? '-' }}</span>
                                                    </td>
                                                    <td>
                                                        @if (!empty($user->getRoleNames()))
                                                            @foreach ($user->getRoleNames() as $rolename)
                                                                <label
                                                                    class="badge bg-primary mx-1">{{ $rolename }}</label>
                                                            @endforeach
                                                        @endif
                                                        {{-- <span class="fw-bold">{{ $user->role->role ?? '-' }}</span> --}}
                                                    </td>
                                                    <td>
                                                        <ul class="action">
                                                            @can('update user')
                                                                <li class="edit"><a
                                                                        href="{{ route('dashboard.user.edit', [$user->id]) }}"><i
                                                                            class="icon-pencil-alt"></i></a></li>
                                                            @endcan

                                                            @can('delete user')
                                                                <li class="delete">
                                                                    <form
                                                                        action="{{ route('dashboard.user.destroy', $user->id) }}"
                                                                        method="POST">
                                                                        @method('DELETE')
                                                                        @csrf
                                                                        <i type="submit"
                                                                            class="delete_confirmation icon-trash"></i>
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
    </div>
@endsection

@section('script')
@endsection
