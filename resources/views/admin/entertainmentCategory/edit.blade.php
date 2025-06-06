@extends('backend.layouts.master')

@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Entertainment Category</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Entertainment Category List
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a class="btn btn-primary " href="{{ route('admin.entertainmentCategory.index') }}" role="button">
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
            <form method="post" action="{{ route('admin.entertainmentCategory.update',$entertainmentCategory) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-12 row">
                    <div class="form-group col-md-6">
                        <label>Main Category</label>
                        <select class="custom-select2 form-control" name="main_category_id"
                            style="width: 100%; height: 38px">
                            <option value="" >Choose Main Category</option>
                            @foreach ($mainCategories as $maincategory)
                            <option value="{{ $maincategory->id }}"
                                {{ old('mian_category_id', $entertainmentCategory->main_category_id) == $maincategory->id ? 'selected' : '' }}>
                                {{ $maincategory->title_en }}

                            </option>
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
                        <option value="Cinema" {{ old('type', $entertainmentCategory->type) == 'Cinema' ? 'selected' : '' }}>Cinema</option>
                        <option value="Skating" {{ old('type', $entertainmentCategory->type) == 'Skating' ? 'selected' : '' }}>Campus</option>
                        <option value="Park" {{ old('type', $entertainmentCategory->type) == 'Park' ? 'selected' : '' }}>Park</option>
                        <option value="Fun Park" {{ old('type', $entertainmentCategory->type) == 'Water Park' ? 'selected' : '' }}>Water Park</option>
                        <option value="Fun Park" {{ old('type', $entertainmentCategory->type) == 'Fun Park' ? 'selected' : '' }}>Fun Park</option>
                    </select>
                        <span class="text-warning">
                            @error('type')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                </div>
                <div class="col-md-12 row">
                    <div class="form-group col-md-6">
                        <label for="title"> Title</label>
                        <input class="form-control" id="title" name="title" value="{{ old('title',$entertainmentCategory->title) }}"
                            type="text" />
                        <span class="text-warning">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="slug">Slug</label>
                        <input class="form-control" id="slug" name="slug" type="text"
                            value="{{ old('slug',$entertainmentCategory->slug) }}" placeholder="Slug" />
                        <span class="text-warning">
                            @error('slug')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                  
                </div>
                <div class="col-md-12 row">

                    <div class="form-group col-md-6">
                        <label for="position">Position</label>
                        <input class="form-control" id="position" name="position" type="text"
                            value="{{ old('position',$entertainmentCategory->position) }}" placeholder="position" />
                        <span class="text-warning">
                            @error('position')
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
