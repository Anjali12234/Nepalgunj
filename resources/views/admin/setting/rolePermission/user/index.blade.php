@extends('backend.layouts.master')

@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>All User</h4>
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
                        <a class="btn btn-primary " href="{{ route('admin.user.create') }}" role="button">
                            Create User
                        </a>

                    </div>
                </div>

            </div>
        </div>
        <div class="pd-20 card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">Users List</h4>

            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">S.No</th>
                            {{-- <th>Image</th> --}}
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Created at</th>

                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            <tr>
                                <td class="table-plus">{{ $loop->iteration }}</td>
                                {{-- <td>
                                    <img class="rounded-circle"
                                        src="{{ $registeredUser?->registeredUserDetail?->avatar }}"
                                        alt="Property registeredUser Image" width="100" height="100">
                                </td> --}}


                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>  {{ $user->roles?->pluck('name')->implode(', ') }}</td>
                                <td>{{ \Carbon\Carbon::parse($user->created_at)->format('Y-m-d')  }}</td>

                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                            href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">


                                            <a class="dropdown-item" href="{{ route('admin.user.edit', $user) }}"><i
                                                class="dw dw-edit2"></i> Edit</a>
                                            <form action="{{ route('admin.user.destroy', $user) }}"
                                                method="post" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item"
                                                    onclick="return confirm('Are You sure want to delete')"> <i
                                                        class="dw dw-delete-3"></i>Delete </button>

                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    @endsection
