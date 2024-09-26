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
            <div class="col-md-12 row">
                @foreach ($newsList->files as $file)
                    @if (in_array($file->extension, ['jpg', 'jpeg', 'png', 'jfif']))
                        <div class="image" style="margin-right: 20px; margin-bottom: 20px;">
                            <img class="card-img-top" src="{{ $file->file_url }}" style="height: 200px; width: 200px;">
                        </div>
                    @elseif ($file->extension === 'pdf')
                        <div class="pdf" style="padding-right: 10px; margin-bottom: 20px;">
                            <div style="margin-left: 10px;">
                                <iframe src="{{ $file->file_url }}" frameborder="5"
                                    style="height: 200px;width:100%"></iframe>
                            </div>
                        </div>
                    @endif
                    <div class="mt-5">
                        <form action="{{ route('file.destroy', $file) }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete?')">
                                <i class="icon-copy bi bi-x-lg"></i>
                            </button>
                        </form>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
