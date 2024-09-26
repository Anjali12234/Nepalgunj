@extends('backend.layouts.master')

@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Menu</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Menu List
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a class="btn btn-primary " href="{{ route('admin.menu.index') }}" role="button">
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
            <form method="post" action="{{ route('admin.menu.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 row">
                    <div class="form-group col-md-6">
                        <label for="title"> Title</label>
                        <input class="form-control" id="title" name="title" type="text" value="{{ old('title') }}"
                            placeholder=" title" />
                        <span class="text-warning">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="slug"> Slug</label>
                        <input class="form-control" id="slug" name="slug" type="text" value="{{ old('slug') }}"
                            placeholder=" slug" />
                        <span class="text-warning">
                            @error('slug')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="col-md-12 row">
                    <div class="form-group col-md-6">
                        <label>Parent Menu</label>
                        <select class="custom-select2 form-control" name="menu_id" style="width: 100%; height: 38px">
                            <option value="">Choose Parent Menu</option>
                            @foreach ($mainMenus as $mainMenu)
                                <option value="{{ $mainMenu->id }}">{{ $mainMenu->title }}</option>
                            @endforeach
                        </select>
                        <span class="text-warning">
                            @error('menu_id')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="position"> Position</label>
                        <input class="form-control" id="position" name="position" type="number"
                            value="{{ old('position') }}" placeholder=" position" />
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
