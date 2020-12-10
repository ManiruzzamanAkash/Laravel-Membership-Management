@extends('backend.layouts.master')
@section('title', 'User List | Admin Panel')

@section('admin-content')
    <h2>User List</h2>

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
@endsection