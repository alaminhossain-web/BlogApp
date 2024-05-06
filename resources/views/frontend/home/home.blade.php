@extends('frontend.master')

@section('title','Home')

@section('body')
    <!-- Start Hero Area -->
    <section class="echo-hero-section">
        <div class="echo-hero">
            <div class="container">
                <div class="echo-full-hero-content">
                    <div class="row gx-5">
                        <div class="col-xl-8 col-lg-7 col-md-12">
                            <div class="echo-hero-baner">
                                <div class="echo-hero-banner-main-img  img-transition-scale">
                                    <a href="{{ route('blogs.details',$blog->id) }}"><img class="banner-image-one img-hover" src="{{ asset($blog->image) }}" alt="Echo" style="height: 300px"></a>
                                </div>
                                <h1 class="echo-hero-title text-capitalize font-weight-bold"><a href="{{ route('blogs.details',$blog->id) }}" class="title-hover">{{ $blog->title }}</a></h1>
                                <hr>
                                <p class="echo-hero-discription">{!! strlen($blog->content) > 100 ? substr($blog->content, 0, 100) . '...' : $blog->content !!}

                                </p>
                                <div class="echo-hero-area-titlepost-post-like-comment-share">
                                    <div class="echo-hero-area-like-read-comment-share">
                                        <a href="#"><i class="fa-light fa-clock"></i>{{ $blog->created_at->format('d F Y') }} </a>
                                    </div>
                                   
                                   
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-12">
                            <div class="echo-home-1-hero-area-top-story">
                                <h6>Top Story</h6>
                                @foreach ($blogs->take(4) as $blog)
                                <div class="echo-top-story">
                                    <div class="echo-story-picture img-transition-scale">
                                        <a href="post-details.html"><img src="{{ asset($blog->image) }}" alt="Echo" class="img-hover"></a>
                                    </div>
                                    <div class="echo-story-text">
                                        <h4><a href="{{ route('blogs.details',$blog->id) }}" class="title-hover">{{ $blog->title }}</a></h4>
                                        <div class="echo-trending-post-bottom-icons">
                                            <a href="#" class="pe-none"><i class="fa-light fa-clock"></i> {{ $blog->created_at->format('d F Y') }}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                               

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->
     <!-- Start Latest News Slider (using Slick Slider version 1.8.1) -->
    <section class="echo-latest-news-area">
        <div class="echo-latest-news-content">
            <div class="container">
                <div class="echo-be-slider-btn">
                    <div class="echo-latest-nw-title">
                        <h4>Latest News</h4>
                    </div>
                    <div class="echo-latest-news-next-prev-btn">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="echo-latest-news-full-content">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($blogs as $blog)
                            <div class="swiper-slide">
                                <div class="echo-latest-news-main-content">
                                    <div class="echo-latest-news-img img-transition-scale">
                                        <a href="{{ route('blogs.details',$blog->id) }}">
                                            <img src="{{ asset($blog->image) }}" alt="Echo" class="img-hover" style="height: 200px">
                                        </a>
                                    </div>
                                    <div class="echo-latest-news-single-title">
                                        <h5><a href="{{ route('blogs.details',$blog->id) }}" class="text-capitalize title-hover">{{ $blog->title }}</a></h5>
                                    </div>
                                    <div class="echo-latest-news-time-views">
                                        <a href="#" class="pe-none"><i class="fa-light fa-clock"></i> {{ $blog->created_at->format('d F Y') }}</a>
                                       
                                    </div>
                                </div>
                            </div>
                            @endforeach
                          
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest News Slider (using Slick Slider version 1.8.1) -->


    <!-- Start popular News Area -->
    <section class="echo-popular-news-area">
        <div class="echo-popular-news-area-content">
            <div class="container">
                <div class="echo-popular-news-area-full-content">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="echo-popular-area-title">
                                <h4 class="text-center text-capitalize">Popular of the Weeks</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        @foreach ($blogs->take(3) as $blog)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="echo-popular-area-single-item">
                                <div class="echo-popular-area-img img-transition-scale">
                                    <a href="{{ route('blogs.details',$blog->id) }}"><img src="{{ asset($blog->image) }}" alt="Echo" class="img-hover" style="height: 200px"></a>
                                </div>
                                <div class="echo-popular-area-item-title">
                                    <h5 class="text-center text-capitalize"><a href="{{ route('blogs.details',$blog->id) }}" class="title-hover">{{ $blog->title }}</a></h5>
                                </div>
                                <div class="echo-popular-area-read-view text-center">
                                    <a href="#" class="pe-none"><i class="fa-light fa-clock"></i>{{ $blog->created_at->format('d F Y') }}</a>
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Popular News Area -->
@endsection