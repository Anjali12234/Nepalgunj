@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Education Category</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Education Category List
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a class="btn btn-primary " href="{{ route('admin.educationCategory.index') }}" role="button">
                            Back
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="pd-20 card-box mb-30">
           
            <form method="post" action="{{ route('admin.educationCategory.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="col-md-12 row">
                    <div class="form-group col-md-6">
                        <label>Main Category</label>
                        <select class="custom-select2 form-control" name="main_category_id"
                            style="width: 100%; height: 38px">
                            <option value="">Choose Main Category</option>
                            @foreach ($mainCategories as $mainCategory)
                                <option value="{{ $mainCategory->id }}">{{ $mainCategory->title_en }}</option>
                            @endforeach


                        </select>
                        <span class="text-warning">
                            @error('main_category_id')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Type</label>
                        <select class="custom-select2 form-control" name="type"
                            style="width: 100%; height: 38px">
                            <option value="">Choose type</option>
                            <option value="College">College</option>
                            <option value="Campus">Campus</option>
                            <option value="School">School</option>
                            <option value="Institute">Institute</option>
                        </select>
                        <span class="text-warning">
                            @error('type')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                </div>
                <div class="col-md-12 row">
                    {{-- <div class="form-group col-md-6">
                        <label for="title_en">English Title</label>
                        <input class="form-control" id="title_en" name="title_en" value="{{ old('title_en') }}"
                            type="text" />
                        <span class="text-warning">
                            @error('title_en')
                                {{ $message }}
                            @enderror
                        </span>
                    </div> --}}
                    {{-- <div class="form-group col-md-6">
                        <label for="title_ne">Nepali Title</label>
                        <input class="form-control" id="title_ne" name="title_ne" type="text"
                            value="{{ old('title_ne') }}" placeholder="Nepali title" />
                        <span class="text-warning">
                            @error('title_ne')
                                {{ $message }}
                            @enderror
                        </span>
                    </div> --}}
                    {{-- <div class="form-group col-md-6">
                        <label for="icon">Icon</label>
                        <input class="form-control" id="icon" name="icon" type="text"
                            value="{{ old('icon') }}" placeholder="Icon Url" />
                        <span class="text-warning">
                            @error('icon')
                                {{ $message }}
                            @enderror
                        </span>
                    </div> --}}
                </div>

                <div>
                    <button class="btn btn-danger" type="submit">Submit</button>
                </div>
            </form>

        </div>



    @endsection
