
@extends('backend.master')

@section('title','Edit Blog')


@section('body')
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">Dashboard</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Blog</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Edit blogs</h3>
                </div>
                <div class="card-body">
                    <span class="text-success">{{ session('success') }}</span>
                    <form action="{{ route('blogs.update',$blog->id) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                       
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Title</label>
                            <div class="col-md-8">
                                <input type="text" name="title" value="{{ old('title', $blog->title) }}" class="form-control @error('title') is-invalid @enderror">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Content</label>
                            <div class="col-md-8">
                                <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="summernote" cols="30" rows="10">{{ old('content', $blog->content) }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Image</label>
                            <div class="col-md-8">
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <img src="{{ asset($blog->image) }}" alt="" style="height: 60px">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Author</label>
                            <div class="col-md-8">
                                <input type="text" name="author" value="{{ old('author', $blog->author) }}" class="form-control @error('author') is-invalid @enderror">
                                @error('author')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Status</label>
                            <div class="col-md-8">
                                <label><input type="radio" {{ old('status', $blog->status) == 1 ? 'checked' : '' }} name="status" value="1">Published</label>
                                <label><input type="radio" {{ old('status', $blog->status) == 0 ? 'checked' : '' }} name="status" value="0">Unpublished</label>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection