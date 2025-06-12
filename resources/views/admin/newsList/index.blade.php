@extends('backend.layouts.master')

@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>News</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                News List
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a class="btn btn-primary " href="{{ route('admin.newsList.create') }}" role="button">
                            Add
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="pd-20 card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">News List</h4>

            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">S.No</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($newsLists as $key => $newsList)
                            <tr>
                                <td class="table-plus">{{ $loop->iteration }}</td>
                                <td>{{ Str::words($newsList->title, 50) }}</td>
                                <td>

                                    <form action="{{ route('admin.newsList.updateStatus',$newsList) }}" method="post" style="display: inline">
                                        @csrf
                                        @method('put')
                                        <button type="submit" style="border: none; background: none;">
                                            <i class="fa fa-{{ $newsList->status == 1 ? 'toggle-on text-success' : 'toggle-off text-danger' }} fa-2x"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                            href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="{{ route('admin.newsList.edit', $newsList) }}"><i
                                                    class="dw dw-edit2"></i> Edit</a>
                                            <a class="dropdown-item" href="{{ route('admin.newsList.show', $newsList) }}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i> Show</a>
                                            <form action="{{ route('admin.newsList.destroy', $newsList) }}" method="post"
                                                style="display: inline">
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
                {{ $newsLists->links() }}
            </div>
        </div>
    @endsection
