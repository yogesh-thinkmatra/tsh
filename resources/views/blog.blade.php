@extends('layouts.app')
@section('body')
   <!--====================  breadcrumb area ====================-->
   <div class="breadcrumb-area bg-img" data-bg="{{asset('assets/img/backgrounds/funfact-bg.webp')}}">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-banner text-center">
                    <h1>Blog</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!--====================  End of breadcrumb area  ====================-->
<div class="page-wrapper section-space--inner--120">
    <div class="blog-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 order-1 order-lg-2">
                    <div class="row">
                        @foreach ($blogs as $blog)
                            
                        

                        <div class="col-sm-6 col-12">
                            <div class="blog-post-slider__single-slide blog-post-slider__single-slide--grid-view">
                                <div class="blog-post-slider__image section-space--bottom--30">
                                    <a href="blog-details-left-sidebar.html"><img width="370" height="240" src="{{asset('assets/img/blog/1.webp')}}" class="img-fluid" alt=""></a>
                                </div>
                                <div class="blog-post-slider__content">
                                    <p class="post-date"> {{date('M d Y',strtotime($blog->created_at))}}</p>
                                    <h3 class="post-title">
                                        <a href="blog-details-left-sidebar.html">{{$blog->title}}</a>
                                    </h3>
                                    <p class="post-excerpt">{{$blog->description}}</p>
                                    {{-- <a href="blog-details-left-sidebar.html" class="see-more-link">SEE MORE</a> --}}
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                    {{-- <div class="row ">
                        <div class="col">
                            <ul class="page-pagination section-space--top--30">
                                <li><a href="#"><i class="fa fa-angle-left"></i> Prev</a></li>
                                <li class="active"><a href="#">01</a></li>
                                <li><a href="#">02</a></li>
                                <li><a href="#">03</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Next</a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>

                <div class="col-lg-4 col-12 order-2 order-lg-1">

                    <div class="sidebar">
                        <h3 class="sidebar-title">Search</h3>

                        <div class="sidebar-search">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button><i class="ion-ios-search"></i></button>
                            </form>
                        </div>

                    </div>

                   

                    <div class="sidebar">
                        <h3 class="sidebar-title">Popular Post</h3>

                        <div class="sidebar-blog">
                            <a href="blog-details-left-sidebar.html" class="image"><img width="90" height="90" src="{{asset('assets/img/blog/sidebar-blog-1.webp')}}" alt=""></a>
                            <div class="content">
                                <h5><a href="blog-details-left-sidebar.html">What are Groundworkers and what do they do?</a></h5>
                                <span>30 October 2019</span>
                            </div>
                        </div>

                        <div class="sidebar-blog">
                            <a href="blog-details-left-sidebar.html" class="image"><img src="{{asset('assets/img/blog/sidebar-blog-2.webp')}}" alt=""></a>
                            <div class="content">
                                <h5><a href="blog-details-left-sidebar.html">What's really delaying the £15.4bn mega-project</a></h5>
                                <span>30 October 2019</span>
                            </div>
                        </div>

                        <div class="sidebar-blog">
                            <a href="blog-details-left-sidebar.html" class="image"><img src="{{asset('assets/img/blog/sidebar-blog-3.webp')}}" alt=""></a>
                            <div class="content">
                                <h5><a href="blog-details-left-sidebar.html">How much space does a house wall take up in sq ft?</a></h5>
                                <span>30 October 2019</span>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
</div>
<!--====================  brand logo area ====================-->
<div class="brand-logo-slider-area grey-bg section-space--inner--60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- brand logo slider -->
                <div class="brand-logo-slider__container-area">
                    <div class="swiper-container brand-logo-slider__container">
                        <div class="swiper-wrapper brand-logo-slider__wrapper">
                            <div class="swiper-slide brand-logo-slider__single">
                                <div class="image">
                                    <a href="#">
                                        <img width="152" height="51" src="{{asset('assets/img/brand-logo/1.webp')}}" class="img-fluid" alt="">
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide brand-logo-slider__single">
                                <div class="image">
                                    <a href="#">
                                        <img width="199" height="51" src="{{asset('assets/img/brand-logo/2.webp')}}" class="img-fluid" alt="">
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide brand-logo-slider__single">
                                <div class="image">
                                    <a href="#">
                                        <img width="217" height="51" src="{{asset('assets/img/brand-logo/3.webp')}}" class="img-fluid" alt="">
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide brand-logo-slider__single">
                                <div class="image">
                                    <a href="#">
                                        <img width="225" height="51" src="{{asset('assets/img/brand-logo/4.webp')}}" class="img-fluid" alt="">
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide brand-logo-slider__single">
                                <div class="image">
                                    <a href="#">
                                        <img width="152" height="51" src="{{asset('assets/img/brand-logo/1.webp')}}" class="img-fluid" alt="">
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide brand-logo-slider__single">
                                <div class="image">
                                    <a href="#">
                                        <img width="199" height="51" src="{{asset('assets/img/brand-logo/2.webp')}}" class="img-fluid" alt="">
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide brand-logo-slider__single">
                                <div class="image">
                                    <a href="#">
                                        <img width="217" height="51" src="{{asset('assets/img/brand-logo/3.webp')}}" class="img-fluid" alt="">
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide brand-logo-slider__single">
                                <div class="image">
                                    <a href="#">
                                        <img width="225" height="51" src="{{asset('assets/img/brand-logo/4.webp')}}" class="img-fluid" alt="">
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection