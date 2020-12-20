@extends('backend.layouts.master')
@section('title', 'User List | Admin Panel')

@section('admin-content')
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">User List</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="{{ route('admin.index') }}">Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content-inner m-5">
        @include('backend.layouts.partials.messages')
        
        <div class="data-tables">
            <table id="dataTable" class="text-center">
                <thead class="bg-light text-capitalize">
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Designation</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone_no }}</td>
                            <td>{{ $user->designation->name }}</td>
                            <td>
                                <a href="{{ route('admin.users.edit', 1) }}" class="btn btn-outline-success">Edit</a>
                                <a href="{{ route('admin.users.edit', 1) }}" class="btn btn-outline-danger ml-2">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection