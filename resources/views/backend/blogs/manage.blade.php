@extends('backend.master')

@section('title','Manage Blogs')

@section('body')
     <!-- PAGE-HEADER -->
     <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Blog</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
<div class="row py-5">
    <div class="col-md-12 ">
        <div class="card">
            <div class="card-header">
                <h3>Manage Blogs </h3>
            </div>
            <div class="card-body">
                <span class="text-success">{{ session('success') }}</span>
                <span class="text-info">{{ session('update') }}</span>
                <span class="text-danger">{{ session('delete') }}</span>

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $blog->title }}</td>
                            <td>{!! $blog->content !!}</td>
                            <td>
                                <img src="{{ asset($blog->image) }}" alt="" style="height: 60px">
                            </td>
                            <td>{{ $blog->status==1 ? 'Published' : 'Unpulished' }}</td>
                            <td class="d-flex">
                                <a href="{{ route('blogs.edit',$blog->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <form id="deleteForm" action="{{ route('blogs.destroy', $blog->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger ms-3">Delete</button>
                                </form>
                                
                                <script>
                                    document.getElementById('deleteForm').addEventListener('submit', function(event) {
                                        var confirmed = confirm('Are you sure you want to delete this blog?');
                                        if (!confirmed) {
                                            event.preventDefault();
                                        }
                                    });
                                </script>
                                
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection