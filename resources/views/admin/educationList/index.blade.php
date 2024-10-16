@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Education </h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Education  List
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
        <div class="pd-20 card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">Education  List</h4>

            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">S.No</th>
                        <th> Category</th>
                        <th> User </th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($educationLists as $key => $educationList)
                        <tr>
                            <td class="table-plus">{{ $loop->iteration }}</td>
                            <td>{{ $educationList->educationCategory?->title_en }}</td>
                            <td>{{ $educationList->registeredUser?->username }}</td>
                            <td>{{ $educationList->name }}</td>
                            <td>{{ $educationList->slug }}</td>
                            <td>
                                <form action="{{ route('admin.educationList.updateStatus', $educationList) }}" method="post" style="display: inline">
                                    @csrf
                                    @method('put')
                                    <button type="submit" style="border: none; background: none;">
                                        <i class="fa fa-{{ $educationList->status == 1 ? 'toggle-on text-success' : 'toggle-off text-danger' }} fa-2x"></i>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
                {{ $educationLists->links() }}
            </div>
        </div>


@endsection
