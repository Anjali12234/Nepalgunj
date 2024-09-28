@extends('backend.layouts.master')

@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Users</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Users List
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a class="btn btn-primary " href="{{ route('admin.user.index') }}" role="button">
                            Back
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="pd-20 card-box mb-30">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('admin.user.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="col-md-12 row">

                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input class="form-control" id="name" name="name" type="text" value="{{ old('name',$user->name) }}"
                            placeholder=" Enter User  name" />
                        <span class="text-warning">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input class="form-control" id="email" name="email" type="email" value="{{ old('email',$user->email) }}"
                            placeholder=" Enter user's email " />
                        <span class="text-warning">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input class="form-control" id="password" name="password" type="password"
                            value="{{ old('password') }}" placeholder=" Enter password " />
                        <span class="text-warning">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="confirm_password">Confirm Password</label>
                        <input class="form-control" id="confirm_password" name="confirm_password" type="confirm_password"
                            value="{{ old('confirm_password') }}" placeholder=" Enter password " />
                        <span class="text-warning">
                            @error('confirm_password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group col-md-6">

                        <div>
                            <label for="">Select Role</label>
                        </div>

                        @if ($roles->isNotEmpty())
                            @foreach ($roles as $role)
                                <div class="d-inline-block mr-3">

                                    <input {{ in_array($role->name, $hasRole ?? []) ? 'checked' : '' }} type="checkbox"
                                        name="role[]" class="rounded" id="role-{{ $role->id }}"
                                        value="{{ $role->name }}">
                                    <label for="role-{{ $role->id }}">{{ $role->name }}</label>
                                </div>
                            @endforeach
                        @endif
                        <span class="text-warning">
                            @error('role')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                </div>



                <div>
                    <button class="btn btn-danger" type="submit">Submit</button>
                </div>
            </form>

        </div>
    </div>

@endsection
