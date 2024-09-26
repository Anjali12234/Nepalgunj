@extends('backend.layouts.master')

@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>All Registered User</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Registered User List
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
        <div class="pd-20 card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">Registered User List</h4>

            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">S.No</th>
                            <th>Image</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Status</th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registeredUsers as $key => $registeredUser)
                            <tr>
                                <td class="table-plus">{{ $loop->iteration }}</td>
                                <td>
                                    <img class="rounded-circle"
                                        src="{{ $registeredUser?->registeredUserDetail?->avatar }}"
                                        alt="Property registeredUser Image" width="100" height="100">
                                </td>


                                <td>{{ $registeredUser->username }}</td>
                                <td>{{ $registeredUser->email }}</td>
                                <td>{{ $registeredUser->phone_no }}</td>
                                <td>


                                    <a href="javascript:void(0);" class="btn btn-block" data-toggle="modal"
                                        data-target="#modal-{{ $registeredUser->id }}" type="button" style="height:40px"
                                        onclick="toggleActive({{ $registeredUser->id }})">
                                        {!! $registeredUser->is_active
                                            ? '<i class="bi bi-check-lg text-success"></i>'
                                            : '<i class="bi bi-x-lg text-danger"></i> ' !!}
                                    </a>



                                    <div class="modal fade" id="modal-{{ $registeredUser->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="myLargeModalLabel-{{ $registeredUser->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel-{{ $registeredUser->id }}">
                                                        Verify the Account
                                                    </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{ route('admin.registeredUser.updateStatus', $registeredUser) }}" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="col-md-12 row">
                                                            <div class="form-group col-md-6">
                                                                <label>Verify the account</label>
                                                                <select class="custom-select2 form-control" name="is_active" style="width: 100%; height: 38px">
                                                                    <option value="">------- Choose ------</option>
                                                                    <option value="1" {{ $registeredUser->is_active == 1 ? 'selected' : '' }}>Verify</option>
                                                                    <option value="0" {{ $registeredUser->is_active == 0 ? 'selected' : '' }}>Reject</option>
                                                                </select>
                                                                <span class="text-warning">
                                                                    @error('is_active')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>Remarks</label>
                                                                <input type="text" name="remarks" class="form-control" value="{{ old('remarks', $registeredUser->remarks ?? '') }}">
                                                                <span class="text-warning">
                                                                    @error('remarks')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                            href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item"
                                                href="{{ route('admin.registeredUser.show', $registeredUser) }}"><i
                                                    class="icon-copy bi bi-eye"></i> Show</a>

                                            <form action="{{ route('admin.registeredUser.destroy', $registeredUser) }}"
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
                {{ $registeredUsers->links() }}
            </div>
        </div>
    @endsection
