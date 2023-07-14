@extends('layouts.app')
@section('body')
        <!--====================  breadcrumb area ====================-->
        <div class="breadcrumb-area bg-img" data-bg="{{asset('assets/img/backgrounds/funfact-bg.webp')}}">
            <div class="container">
                <div class="row">
                    <div class="col">
    
                        <div class="page-banner text-center">
                            <h1>Blog Details</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li>Blog Details</li>
                            </ul>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of breadcrumb area  ====================-->
        <div class="page-wrapper section-space--inner--120">
            <!--Blog section start-->
            <div class="blog-section">
                <div class="container">
                    <div class="row">
    
                        <div class="col-lg-8 col-12 order-1 order-lg-2">
                            <div class="row">
    
                                <div class="blog-details col-12">
                                    <div class="blog-inner">
                                        <div class="media">
                                            <div class="image"><img width="770" height="450" src="{{asset('assets/img/blog/blog-details-1.webp')}}" alt=""></div>
                                        </div>
                                        <div class="content">
                                            <ul class="meta">
                                                <li>By <a href="#">admin</a></li>
                                                <li>30 October 2019</li>
                                                <li><a href="#">3 Comment</a></li>
                                            </ul>
                                            <h2 class="title">What are Groundworkers and what do they do?</h2>
                                            <div class="desc section-space--bottom--30">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit eveniet reprehenderit voluptas delectus reiciendis pariatur, totam id quae tempore fugiat tenetur asperiores saepe velit nisi voluptates molestiae quia fugit laboriosam quidem, distinctio dolor consequatur repellendus debitis natus magni. Totam atque provident nulla quasi voluptatum nostrum officia rerum pariatur maxime sit.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste iure eveniet minima commodi consequuntur veritatis, officiis quibusdam molestias, nemo dolorum veniam quisquam pariatur facilis repudiandae eaque quas assumenda enim, unde placeat dolores id voluptatibus amet.</p>
    
                                                <blockquote class="blockquote section-space--bottom--30 section-space--top--30">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ad totam est optio mollitia dolores rem ducimus. Odio assumenda distinctio adipisci! Consequuntur excepturi eos nulla.</p>
                                                    <span class="author">__Denise Miller</span>
                                                </blockquote>
    
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam explicabo iusto suscipit dolore repellendus odit laborum, cupiditate unde nesciunt eveniet temporibus autem adipisci earum at error aspernatur neque minima doloribus?</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis voluptate repellat quam exercitationem excepturi enim et blanditiis amet minima itaque, doloribus cumque labore. Asperiores nemo odio sed molestias harum laborum quia enim, delectus repellendus consequuntur unde magnam, ipsam possimus vero, quam dolore adipisci. Rerum, vitae!</p>
    
                                            </div>
                                            <ul class="tags">
                                                <li><i class="fa fa-tags"></i></li>
                                                <li><a href="#">Consulting</a></li>
                                                <li><a href="#">Planning</a></li>
                                                <li><a href="#">Renovation</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-12 section-space--top--60">
                                    <div class="comment-wrapper">
    
                                        <h3>Leave Your Comment</h3>
    
                                        <div class="comment-form">
                                            <form action="#">
                                                <div class="row row-10">
                                                    <div class="col-md-6 col-12 section-space--bottom--20"><input type="text" placeholder="Your Name"></div>
                                                    <div class="col-md-6 col-12 section-space--bottom--20"><input type="email" placeholder="Your Email"></div>
                                                    <div class="col-12"><textarea placeholder="Your Message"></textarea></div>
                                                    <div class="col-12"><input type="submit" value="Send Comment"></div>
                                                </div>
                                            </form>
                                        </div>
    
                                    </div>
                                </div>
    
                            </div>
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
                                <h3 class="sidebar-title">Categories</h3>
    
                                <ul class="sidebar-list">
                                    <li><a href="#">Renovation</a></li>
                                    <li><a href="#">Architecture</a></li>
                                    <li><a href="#">Concrete Supply</a></li>
                                    <li><a href="#">Laminate Flooring</a></li>
                                    <li><a href="#">Consulting</a></li>
                                    <li><a href="#">Interior Design</a></li>
                                    <li><a href="#">Project Planning</a></li>
                                </ul>
    
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
    
                            <div class="sidebar">
                                <h3 class="sidebar-title">Popular Tags</h3>
    
                                <ul class="sidebar-tag">
                                    <li><a href="#">Renovation</a></li>
                                    <li><a href="#">Architecture</a></li>
                                    <li><a href="#">Concrete</a></li>
                                    <li><a href="#">Flooring</a></li>
                                    <li><a href="#">Consulting</a></li>
                                    <li><a href="#">Interior</a></li>
                                    <li><a href="#">Planning</a></li>
                                </ul>
    
                            </div>
    
                        </div>
    
                    </div>
                </div>
            </div>
            <!--Blog section end-->
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
                                                <img width="152" height="51" src="{{route('assets/img/brand-logo/1.webp')}}" class="img-fluid" alt="">
                                            </a>
                                        </div>
    
                                    </div>
                                    <div class="swiper-slide brand-logo-slider__single">
                                        <div class="image">
                                            <a href="#">
                                                <img width="199" height="51" src="{{route('assets/img/brand-logo/2.webp')}}" class="img-fluid" alt="">
                                            </a>
                                        </div>
    
                                    </div>
                                    <div class="swiper-slide brand-logo-slider__single">
                                        <div class="image">
                                            <a href="#">
                                                <img width="217" height="51" src="{{route('assets/img/brand-logo/3.webp')}}" class="img-fluid" alt="">
                                            </a>
                                        </div>
    
                                    </div>
                                    <div class="swiper-slide brand-logo-slider__single">
                                        <div class="image">
                                            <a href="#">
                                                <img width="225" height="51" src="{{route('assets/img/brand-logo/4.webp')}}" class="img-fluid" alt="">
                                            </a>
                                        </div>
    
                                    </div>
                                    <div class="swiper-slide brand-logo-slider__single">
                                        <div class="image">
                                            <a href="#">
                                                <img width="152" height="51" src="{{route('assets/img/brand-logo/1.webp')}}" class="img-fluid" alt="">
                                            </a>
                                        </div>
    
                                    </div>
                                    <div class="swiper-slide brand-logo-slider__single">
                                        <div class="image">
                                            <a href="#">
                                                <img width="199" height="51" src="{{route('assets/img/brand-logo/2.webp')}}" class="img-fluid" alt="">
                                            </a>
                                        </div>
    
                                    </div>
                                    <div class="swiper-slide brand-logo-slider__single">
                                        <div class="image">
                                            <a href="#">
                                                <img width="217" height="51" src="{{route('assets/img/brand-logo/3.webp')}}" class="img-fluid" alt="">
                                            </a>
                                        </div>
    
                                    </div>
                                    <div class="swiper-slide brand-logo-slider__single">
                                        <div class="image">
                                            <a href="#">
                                                <img width="225" height="51" src="{{route('assets/img/brand-logo/4.webp')}}" class="img-fluid" alt="">
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