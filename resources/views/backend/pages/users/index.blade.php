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
                        <th>Profile</th>
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
                            <td>
                                <a href="{{ asset('images/users/'.$user->image) }}" target="_blank">
                                    <img src="{{ asset('images/users/'.$user->image) }}"  style="width: 50px"/>
                                </a>
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone_no }}</td>
                            <td>{{ $user->designation !== null ? $user->designation->name : '' }}</td>
                            <td>
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-outline-success">Edit</a>
                                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteUserModal{{ $user->id }}">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @foreach ($users as $user)
            <div class="modal fade" id="deleteUserModal{{ $user->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Are you sure to delete ?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" action="{{ route('admin.users.delete', $user->id) }}" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger ml-2">
                                Confirm, Delete
                            </button>
                            <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

        </div>
    </div>
@endsection
