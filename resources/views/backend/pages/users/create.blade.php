@extends('backend.layouts.master')
@section('title', 'User List | Admin Panel')

@section('admin-content')
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Create User</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.index') }}">Dashboard</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

    <div class="main-content-inner">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">New User</h4>

                    {{-- Show validation error messages --}}
                    @include('backend.layouts.partials.messages')

                    <form action="{{ route('admin.users.store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="username">User Name (Optional - auto generated)</label>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="designation_id">Designation</label>
                                    <select name="designation_id" id="designation_id" class="form-control">
                                        <option value="">Select</option>
                                        @foreach ($designations as $designation)
                                            <option value="{{ $designation->id }}">{{ $designation->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="phone_no">Phone No</label>
                                    <input type="text" class="form-control" name="phone_no" id="phone_no" placeholder="Enter Phone No">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="present_address">Present Address</label>
                                    <input type="text" class="form-control" name="present_address" id="present_address" placeholder="Enter Present Address">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="parmanent_address">Permanent Address</label>
                                    <input type="text" class="form-control" name="parmanent_address" id="parmanent_address" placeholder="Enter Parmanent Address">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                       
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection