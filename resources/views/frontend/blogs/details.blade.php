@extends('frontend.master')

@section('title','Blog Details Page')

@section('body')
    
    <section class="echo-hero-section inner inner-post inner-post-2">
        <div class="echo-hero">
            <div class="container">
                <div class="echo-full-hero-content">
                    <div class="row gx-5 sticky-coloum-wrap">
                        <div class="col-xl-8 col-lg-8">
                            <div class="echo-hero-baner">
                                <h2 class="echo-hero-title text-capitalize font-weight-bold"><a href="#" class="title-hover">{{ $blog->title }}</a></h2>
                                <div class="echo-hero-area-titlepost-post-like-comment-share">
                                    <div class="echo-hero-area-like-read-comment-share">
                                        <a href="#"><i class="fa-light fa-clock"></i> {{ $blog->created_at->format('d F Y') }}</a>
                                    </div>
                                    <div class="echo-hero-area-like-read-comment-share">
                                        <a href="#"><i class="fa-light fa-user"></i> {{ $blog->author }}</a>
                                    </div>
                                    <div class="echo-hero-area-like-read-comment-share">
                                        <a href="#"><i class="fa-light fa-comment-dots"></i> {{ $comments->count() }} Comment</a>
                                    </div>
                                </div>
                                <div class="echo-inner-img-ct-1  img-transition-scale">
                                    <a href="#"><img src="{{ asset($blog->image) }}" alt="Echo" class="echo-post-style-3-hero-banner"></a>
                                </div>
                                <p class="echo-hero-discription">{!! $blog->content !!}
                                </p>
                                
                            </div>
                            <div class="echo-reply-area">
                                @if(session()->has('delete'))
                                    <div class="text-danger">
                                        {{ session('delete') }}
                                    </div>
                                @endif

                                <h5 class="title">Comment</h5>
                                <ul class="comment-inner">
                                    @foreach ($comments as $comment)
                                    <li class="wrapper">
                                        <div class="image-area">
                                            <i class="fa-regular fa-user"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="title">{{ $comment->name }}</h5>
                                            <a href="#" class="pe-none">{{ $comment->created_at->format('j F Y') }}</a>
                                            <p class="desc">{{ $comment->comment }}</p>
                                        </div>
                                        @auth
                                        @if(auth()->user()->name === $comment->name)
                                            <form action="{{ route('comment.delete', ['id' => $blog->id, 'commentId' => $comment->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">
                                                    <div class="reply"><i class="fa-regular fa-delete-left"></i> Delete</div>
                                                </button>
                                            </form> 
                                        @endif
                                    @endauth
                                    
                                        
                                    </li>
                                    @endforeach
                                   
                                   
                                </ul>
                            </div>
                            <div class="echo-comment-box">
                                <div class="comment-box-inner">
                                    @if(session()->has('success'))
                                    <div class="text-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                    <h5 class="title">Leave A Comment</h5>
                                    <form action="{{ route('comment.store',$blog->id) }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <textarea  name="comment" placeholder="Write Your Comment Here"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="submit-btn">Submit Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 sticky-coloum-item">
                            <div class="echo-right-ct-1">
                                <div class="echo-home-1-hero-area-top-story">
                                    <h5 class="text-center">Our Picks</h5>
                                    @foreach ($blogs as $blog)
                                    <div class="echo-top-story">
                                        <div class="echo-story-picture img-transition-scale">
                                            <a href="{{ route('blogs.details',$blog->id) }}"><img src="{{ asset($blog->image) }}" alt="image" class="img-hover" style="height: 100px"></a>
                                        </div>
                                        <div class="echo-story-text">
                                            <h6><a href="{{ route('blogs.details',$blog->id) }}" class="title-hover">{{ $blog->title }}</a></h6>
                                            <a href="#" class="pe-none"><i class="fa-light fa-clock"></i> {{ $blog->created_at->format('F j, Y') }}</a>
                                        </div>
                                    </div>
                                    @endforeach
                                   
                                    
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection