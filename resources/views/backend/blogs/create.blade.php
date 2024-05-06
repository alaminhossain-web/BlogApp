
@extends('backend.master')

@section('title','Add New Blog')


@section('body')
     <!-- PAGE-HEADER -->
     <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Blog</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Create Blogs</h3>
                </div>
                <div class="card-body">
                    <span class="text-success">{{ session('success') }}</span>
                    <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row mt-3">
                            <label for="" class="col-md-2">Title</label>
                            <div class="col-md-10">
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-2">Content</label>
                            <div class="col-md-10">
                                <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="summernote" cols="30" rows="10">{{ old('content') }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-2">Image</label>
                            <div class="col-md-10">
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-2">Author</label>
                            <div class="col-md-10">
                                <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" value="{{ old('author', auth()->user()->name) }}">
                                @error('author')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-2">Status</label>
                            <div class="col-md-10">
                                <label><input type="radio" checked name="status" value="1">Published</label>
                                <label class="ms-3"><input type="radio"  name="status" value="0">Unpublished</label>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-info">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection