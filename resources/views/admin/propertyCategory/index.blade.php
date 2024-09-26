@extends('backend.layouts.master')
@section('container')
<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>Property Category</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Property Category List
                        </li>
                    </ol>
                </nav>
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
        <form method="post" action="{{ route('admin.propertyCategory.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="col-md-12 row">
                <div class="form-group col-md-6">
                    <label>Main Category</label>
                    <select class="custom-select2 form-control" name="main_category_id"
                        style="width: 100%; height: 38px">
                        <option value="" >Choose Main Category</option>
                            @foreach ($mainCategories as $mainCategory)
                                <option value="{{ $mainCategory->id }}">{{ $mainCategory->title_en }}</option>
                            @endforeach


                    </select>
                    <span class="text-warning">
                        @error('category_id')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6">
                    <label for="title_en">English Title</label>
                    <input class="form-control" id="title_en" name="title_en" value="{{ old('title_en') }}"
                        type="text" />
                    <span class="text-warning">
                        @error('title_en')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="col-md-12 row">
                <div class="form-group col-md-6">
                    <label for="title_ne">Nepali Title</label>
                    <input class="form-control" id="title_ne" name="title_ne" type="text"
                        value="{{ old('title_ne') }}" placeholder="Nepali title" />
                    <span class="text-warning">
                        @error('title_ne')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6">
                    <label for="icon">Icon</label>
                    <input class="form-control" id="icon" name="icon" type="text"
                        value="{{ old('icon') }}" placeholder="Icon Url" />
                    <span class="text-warning">
                        @error('icon')
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
    <div class="pd-20 card-box mb-30">
        <div class="pd-20">
            <h4 class="text-blue h4">Property Category List</h4>

        </div>
        <div class="pb-20">
            <table class="data-table table stripe hover nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">S.No</th>
                        <th>Main Category</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($propertyCategories as $key => $propertyCategory)
                        <tr>
                            <td class="table-plus">{{ $loop->iteration }}</td>
                            <td>{{ $propertyCategory->mainCategory?->title_ne }}</td>
                            <td>{{ $propertyCategory->title_ne }}</td>
                            <td>{{ $propertyCategory->slug }}</td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                        href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item"
                                            href="{{ route('admin.propertyCategory.edit', $propertyCategory) }}"><i
                                                class="dw dw-edit2"></i> Edit</a>

                                        <form action="{{ route('admin.propertyCategory.destroy', $propertyCategory) }}" method="post"
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
            {{ $propertyCategories->links() }}
        </div>
    </div>


@endsection
