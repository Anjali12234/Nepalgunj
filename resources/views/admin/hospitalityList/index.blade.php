@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Hospitality </h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Hospitality  List
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
        <div class="pd-20 card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">Hospitality  List</h4>

            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">S.No</th>
                        <th> Category</th>
                        <th> User </th>
                        <th>Title</th>
                        <th>Slug</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($hospitalityLists as $key => $hospitalityList)
                        <tr>
                            <td class="table-plus">{{ $loop->iteration }}</td>
                            <td>{{ $hospitalityList->hospitalityCategory?->title_en }}</td>
                            <td>{{ $hospitalityList->registeredUser?->username }}</td>
                            <td>{{ $hospitalityList->name }}</td>
                            <td>{{ $hospitalityList->slug }}</td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
                {{ $hospitalityLists->links() }}
            </div>
        </div>


@endsection
