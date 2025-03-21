@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Entertainment List </h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Entertainment  List
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
        <div class="pd-20 card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">Entertainment  List</h4>

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
                        <th>isFeatured</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($entertainmentLists as $key => $entertainmentList)
                        <tr>
                            <td class="table-plus">{{ $loop->iteration }}</td>
                            <td>{{ $entertainmentList->entertainmentCategory?->title }}</td>
                            <td>{{ $entertainmentList->registeredUser?->username }}</td>
                            <td>{{ $entertainmentList->name }}</td>
                            <td>{{ $entertainmentList->slug }}</td>
                            <td>
                                <form action="{{ route('admin.entertainmentList.updateStatus', $entertainmentList) }}" method="post" style="display: inline">
                                    @csrf
                                    @method('put')
                                    <button type="submit" style="border: none; background: none;">
                                        <i class="fa fa-{{ $entertainmentList->status == 1 ? 'toggle-on text-success' : 'toggle-off text-danger' }} fa-2x"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('admin.entertainmentList.isFeatured', $entertainmentList->id) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="toggle" value="is_featured">
                                    <button type="submit" style="border: none; background: none;">
                                        <i class="fa fa-{{ $entertainmentList->is_featured == 1 ? 'toggle-on text-success' : 'toggle-off text-danger' }} fa-2x"></i>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
                {{ $entertainmentLists->links() }}
            </div>
        </div>


@endsection
