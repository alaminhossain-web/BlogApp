@extends('backend.master')

@section('title','Dashboard')

@section('body')
<div class="main-container container-fluid">

                                
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 -->
    <div class="row">
        <h3 class="text-center text-primary py-3">Our Blogs</h3>
        @foreach ($blogs as $blog)
        <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h3 class="mb-2 fw-semibold">{{ $blog->title }}</h3>
                            <p>
                                <img src="{{ asset($blog->image) }}" alt="" style="height: 100px">
                            </p>
                           
                            <p class="text-muted mb-0 mt-2 fs-12">
                                {!! $blog->content !!}
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        @endforeach
        
    </div>
    <!-- ROW-1 END-->

    

   

    
</div>
@endsection