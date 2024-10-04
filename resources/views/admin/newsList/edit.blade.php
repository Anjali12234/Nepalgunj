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
                        <a class="btn btn-primary " href="{{ route('admin.newsList.index') }}" role="button">
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
            <form method="post" action="{{ route('admin.newsList.update', $newsList) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-12 row">

                    <div class="form-group col-md-6">
                        <label>Category</label>
                        <select class="custom-select2 form-control" name="news_category_id"
                            style="width: 100%; height: 38px">
                            <option value="">Choose Main Category</option>
                            @foreach ($newsCategories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('news_category_id', $newsList->news_category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->title }}

                                </option>
                            @endforeach
                        </select>
                        <span class="text-warning">
                            @error('news_category_id')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="title"> Title</label>
                        <input class="form-control" id="title" name="title" type="text"
                            value="{{ old('title', $newsList->title) }}" placeholder=" title" />
                        <span class="text-warning">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="col-md-12 row">


                    <div class="form-group col-md-6">
                        <label for="publisher"> Pulisher</label>
                        <input class="form-control" id="publisher" name="publisher" type="text"
                            value="{{ old('publisher', $newsList->publisher) }}" placeholder=" publisher" />
                        <span class="text-warning">
                            @error('publisher')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="publish_date"> Publish Date</label>
                        <input class="form-control" id="publish_date" name="publish_date" type="date"
                            value="{{ old('publish_date', $newsList->publish_date) }}" placeholder=" publish_date" />
                        <span class="text-warning">
                            @error('publish_date')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="col-md-12 row">

                    <div class="form-group col-md-6">
                        <label for="slug">Slug</label>
                        <input class="form-control" id="slug" name="slug" type="text"
                            value="{{ old('slug', $newsList->slug) }}" placeholder=" slug" />
                        <span class="text-warning">
                            @error('slug')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="position"> Position</label>
                        <input class="form-control" id="position" name="position" type="text"
                            value="{{ old('position', $newsList->position) }}" placeholder=" position" />
                        <span class="text-warning">
                            @error('position')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="col-md-12 row">

                    <div class="form-group col-md-12">
                        <label for="details">Description</label>
                        <textarea name="details" id="editor" cols="30" rows="130">{{ old('details', $newsList->details) }}</textarea>
                    </div>
                </div>
                <div class="col-md-12 row">

                    <div class="form-group col-md-6">
                        <label for="image">File</label>
                        <input class="form-control" type="file" id="image" name="image" />
                    </div>
                </div>
                {{-- <div class="col-md-12 row">

                    <div class="form-group col-md-6">
                        <label for="image">File</label>
                        <input class="form-control" type="file" id="files" name="files[]" multiple />
                    </div>
                </div> --}}

                <div>
                    <button class="btn btn-danger" type="submit">Submit</button>
                </div>
            </form>

        </div>
    </div>

@endsection
