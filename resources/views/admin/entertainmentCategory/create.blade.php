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
                                entertainment Category List
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
           
            <form method="post" action="{{ route('admin.entertainmentCategory.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="col-md-12 row">
                    <div class="form-group col-md-6">
                        <label>Main Category</label>
                        <select class="custom-select2 form-control" name="main_category_id"
                            style="width: 100%; height: 38px">
                            <option value="">Choose Main Category</option>
                            @foreach ($mainCategories as $mainCategory)
                                <option value="{{ $mainCategory->id }}" {{ $mainCategory->title_en == 'Entertainment' ? 'selected' : '' }}>
                                    {{ $mainCategory->title_en }}</option>
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
                            <option value="Cinema">Cinema</option>
                            <option value="Skating">Skating</option>
                            <option value="Park">Park</option>
                            <option value="Water Park">Water Park</option>
                            <option value="Fun Park">Fun Park</option>
                        </select>
                        <span class="text-warning">
                            @error('type')
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



    @endsection
