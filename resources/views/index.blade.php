@extends('layouts.app')
@section('body')
<div class="hero-alider-area">
    <div class="hero-slider__container-area">
        <div class="swiper-container hero-slider__container">
            <div class="swiper-wrapper hero-slider__wrapper">
                <!--=======  single slider item  =======-->

                <div class="swiper-slide hero-slider__single-item bg-img" data-bg="{{asset('uploads/content/slider4.jpg')}}">
                    <div class="hero-slider__content-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="hero-slider__content m-auto text-center">
                                        <h2 class="hero-slider__title">With Technosofthunter Build Your Dream</h2>
                                        <p class="hero-slider__text"></p>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--=======  End of single slider item  =======-->
                <!--=======  single slider item  =======-->

                <div class="swiper-slide hero-slider__single-item bg-img" data-bg="{{asset('uploads/content/slider5.jpg')}}">
                    <div class="hero-slider__content-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="hero-slider__content m-auto text-center">
                                        <h2 class="hero-slider__title">With Technosofthunter Build Your Dream</h2>
                                        <p class="hero-slider__text"></p>
                                     
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <!--=======  End of single slider item  =======-->
            </div>
        </div>
        <div class="ht-swiper-button-prev ht-swiper-button-prev-13 ht-swiper-button-nav d-none d-xl-block"><i
                class="ion-ios-arrow-left"></i></div>
        <div class="ht-swiper-button-next ht-swiper-button-next-13 ht-swiper-button-nav d-none d-xl-block"><i
                class="ion-ios-arrow-forward"></i></div>
    </div>
</div>
<!--====================  End of hero slider area  ====================-->
<!--====================  feature icon area ====================-->
<div class="feature-icon-area section-space--inner--120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-icon-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-feature-icon">
                                <div class="single-feature-icon__image">
                                    <img width="62" height="62" src="{{asset('uploads/content/graphiclogo.png')}}" class="img-fluid" alt="">
                                </div>
                                <h3 class="single-feature-icon__title">Designing</h3>
                                <p class="single-feature-icon__content">Our Commitment to excellence is evident in every aspect of our work</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-feature-icon">
                                <div class="single-feature-icon__image">
                                    <img width="68" height="62" src="{{asset('uploads/content/mllogo.png')}}" class="img-fluid" alt="">
                                </div>
                                <h3 class="single-feature-icon__title">Machine Learning and AI</h3>
                                <p class="single-feature-icon__content">Our ML and AI services are designed to help you unblock the full potential of your data</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-feature-icon">
                                <div class="single-feature-icon__image">
                                    <img width="62" height="62" src="{{asset('uploads/content/mllogo.png')}}" class="img-fluid" alt="">
                                </div>
                                <h3 class="single-feature-icon__title">Blockchain</h3>
                                <p class="single-feature-icon__content">Security is a paramount concern is todays's digital landscape and blockchain provides a robust solution</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-feature-icon">
                                <div class="single-feature-icon__image">
                                    <img width="62" height="62" src="{{asset('uploads/content/marketinflogo.png')}}" class="img-fluid" alt="">
                                </div>
                                <h3 class="single-feature-icon__title">Digital Marketing</h3>
                                <p class="single-feature-icon__content">Our Comprehensive range of digital marketing services convers all aspects of online promotion</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of feature icon area  ====================-->
<!--====================  about content area ====================-->
<div class="about-content-area grey-bg section-space--inner--120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="video-cta-content">
                    <h4 class="video-cta-content__small-title">ABOUT US</h4>
                    <h3 class="video-cta-content__title">We are a leading IT company specializing in providing a wide range of innpvative solutions and services to businesses of all size</p>
                    <a href="{{route('contact-us')}}" class="ht-btn ht-btn--round">CONTACT US</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-image">
                    <img width="650" height="311" src="{{asset('uploads/content/about-us.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--====================  End of about content area  ====================-->
<!--====================  service tab area ====================-->
<div class="service-tab-area section-space--inner--120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title-area text-center section-space--bottom--50">
                    <h2 class="section-title">Our Services</h2>
                    <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                </div>
            </div>
            <div class="col-lg-12">
                <!-- service tab wrapper -->
                <div class="service-tab-wrapper">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <div class="nav nav-tabs flex-column service-tab__link-wrapper" id="nav-tab2"
                                role="tablist">
                                <a class="nav-item nav-link active" id="service-item1-tab" data-bs-toggle="tab"
                                    href="#service-item1" role="tab" aria-selected="true"> <span class="icon"><i
                                            class="flaticon-002-welding"></i></span> <span class="text">Designing</span></a>
                                <a class="nav-item nav-link" id="service-item2-tab" data-bs-toggle="tab"
                                    href="#service-item2" role="tab" aria-selected="false"><span class="icon"><i
                                            class="flaticon-004-walkie-talkie"></i></span> <span class="text">Machine Learning and AI</span></a>
                                <a class="nav-item nav-link" id="service-item3-tab" data-bs-toggle="tab"
                                    href="#service-item3" role="tab" aria-selected="false"><span class="icon"><i
                                            class="flaticon-015-cart"></i></span> <span class="text">Blockchain</span> </a>
                                <a class="nav-item nav-link" id="service-item4-tab" data-bs-toggle="tab"
                                    href="#service-item4" role="tab" aria-selected="false"><span class="icon"><i
                                            class="flaticon-010-tank-1"></i></span> <span class="text">Digital Marketing</span></a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content service-tab__content-wrapper">
                                <div class="tab-pane fade show active" id="service-item1" role="tabpanel"
                                    aria-labelledby="service-item1-tab">
                                    <div class="service-tab__single-content-wrapper bg-img"
                                        data-bg="{{asset('uploads/content/design.jpg')}}">
                                        <div class="service-tab__single-content">
                                            <h3 class="service-tab__title">Designing</h3>
                                            <p class="service-tab__text">Our Commitment to excellence is evident in every aspect of our work</p>
                                            <a href="service-details.html" class="see-more-link">SEE MORE</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="service-item2" role="tabpanel"
                                    aria-labelledby="service-item2-tab">
                                    <div class="service-tab__single-content-wrapper bg-img"
                                        data-bg="{{asset('uploads/content/ml.jpg')}}">
                                        <div class="service-tab__single-content">
                                            <h3 class="service-tab__title">Machine Learning and AI</h3>
                                            <p class="service-tab__text">Our ML and AI services are designed to help you unblock the full potential of your data</p>
                                            <a href="service-details.html" class="see-more-link">SEE MORE</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="service-item3" role="tabpanel"
                                    aria-labelledby="service-item3-tab">
                                    <div class="service-tab__single-content-wrapper bg-img"
                                        data-bg="{{asset('uploads/content/blockchain.jpg')}}">
                                        <div class="service-tab__single-content">
                                            <h3 class="service-tab__title">Blockchain</h3>
                                            <p class="service-tab__text">Security is a paramount concern is todays's digital landscape and blockchain provides a robust solution/p>
                                            <a href="service-details.html" class="see-more-link">SEE MORE</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="service-item4" role="tabpanel"
                                    aria-labelledby="service-item4-tab">
                                    <div class="service-tab__single-content-wrapper bg-img"
                                        data-bg="{{asset('uploads/content/social.png')}}">
                                        <div class="service-tab__single-content">
                                            <h3 class="service-tab__title">Digital Marketing</h3>
                                            <p class="service-tab__text">Our Comprehensive range of digital marketing services convers all aspects of online promotion</p>
                                            <a href="service-details.html" class="see-more-link">SEE MORE</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of service tab area  ====================-->
<!--====================  testimonial slider area ====================-->
<div class="testimonial-slider-area testimonial-slider-area-bg section-space--inner--120 bg-img"
    data-bg="assets/img/backgrounds/testimonial.webp">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="testimonial-slider">
                    <div class="testimonial-slider__container-area">
                        <div class="swiper-container testimonial-slider__container">
                            <div class="swiper-wrapper testimonial-slider__wrapper">
                                <div class="swiper-slide testimonial-slider__single-slide">
                                    <div class="author">
                                        <div class="author__image">
                                            <img width="100" height="100" src="{{asset('assets/img/testimonial/1.webp')}}" alt="">
                                        </div>
                                        <div class="author__details">
                                            <h4 class="name">Madison Black</h4>
                                            <div class="designation">Founder</div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipisi elit sed do eiusmod tempor
                                        incididu ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco
                                    </div>
                                </div>
                                <div class="swiper-slide testimonial-slider__single-slide">
                                    <div class="author">
                                        <div class="author__image">
                                            <img width="100" height="100" src="{{asset('assets/img/testimonial/2.webp')}}" alt="">
                                        </div>
                                        <div class="author__details">
                                            <h4 class="name">John Doe</h4>
                                            <div class="designation">Founder</div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        do eiusmod tempor incididu ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostrud exercitation ullamco
                                    </div>
                                </div>
                                <div class="swiper-slide testimonial-slider__single-slide">
                                    <div class="author">
                                        <div class="author__image">
                                            <img width="100" height="100" src="{{asset('assets/img/testimonial/3.webp')}}" alt="">
                                        </div>
                                        <div class="author__details">
                                            <h4 class="name">Jonathon Doe</h4>
                                            <div class="designation">Founder</div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        consectetur adipisi elit sed do eiusmod tempor incididu ut labore et dolore
                                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of testimonial slider area  ====================-->
<!--====================  project gallery area ====================-->
<div class="project-gallery-area section-space--inner--120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title-area text-center section-space--bottom--50">
                    <h2 class="section-title">Latest Projects</h2>
                    <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project-gallery-wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-gallery-project">
                                <div class="single-gallery-project__image">
                                    <img width="570" height="307" src="{{asset('assets/img/projects/project-13.webp')}}" class="img-fluid" alt="">
                                </div>
                                <div class="single-gallery-project__content">
                                    <h4 class="title">WORK MANAGEMENT</h4>
                                    <a href="project-details.html">SEE MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-mobile-6">
                            <div class="single-gallery-project">
                                <div class="single-gallery-project__image">
                                    <img width="270" height="307" src="{{asset('assets/img/projects/project-14.webp')}}" class="img-fluid" alt="">
                                </div>
                                <div class="single-gallery-project__content">
                                    <h4 class="title">WORK MANAGEMENT</h4>
                                    <a href="project-details.html">SEE MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-mobile-6">
                            <div class="single-gallery-project">
                                <div class="single-gallery-project__image">
                                    <img width="270" height="307" src="{{asset('assets/img/projects/project-15.webp')}}" class="img-fluid" alt="">
                                </div>
                                <div class="single-gallery-project__content">
                                    <h4 class="title">WORK MANAGEMENT</h4>
                                    <a href="project-details.html">SEE MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-mobile-6">
                            <div class="single-gallery-project">
                                <div class="single-gallery-project__image">
                                    <img width="270" height="307" src="{{asset('assets/img/projects/project-16.webp')}}" class="img-fluid" alt="">
                                </div>
                                <div class="single-gallery-project__content">
                                    <h4 class="title">WORK MANAGEMENT</h4>
                                    <a href="project-details.html">SEE MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-mobile-6">
                            <div class="single-gallery-project">
                                <div class="single-gallery-project__image">
                                    <img width="270" height="307" src="{{asset('assets/img/projects/project-17.webp')}}" class="img-fluid" alt="">
                                </div>
                                <div class="single-gallery-project__content">
                                    <h4 class="title">WORK MANAGEMENT</h4>
                                    <a href="project-details.html">SEE MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-gallery-project">
                                <div class="single-gallery-project__image">
                                    <img width="570" height="307" src="{{asset('assets/img/projects/project-18.webp')}}" class="img-fluid" alt="">
                                </div>
                                <div class="single-gallery-project__content">
                                    <h4 class="title">WORK MANAGEMENT</h4>
                                    <a href="project-details.html">SEE MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of project gallery area  ====================-->
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
<!--====================  End of brand logo area  ====================-->
<!--====================  blog grid area ====================-->
<div class="blog-grid-area section-space--inner--120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title-area text-center section-space--bottom--50">
                    <h2 class="section-title">New Blog</h2>
                    <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="blog-grid-wrapper">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="blog-post-slider__single-slide blog-post-slider__single-slide--grid-view">
                                <div class="blog-post-slider__image section-space--bottom--30">
                                    <a href="blog-details-left-sidebar.html"><img width="370" height="240" src="{{asset('assets/img/blog/1.webp')}}"
                                            class="img-fluid" alt=""></a>
                                </div>
                                <div class="blog-post-slider__content">
                                    <p class="post-date"> AUGUST 4, 2019</p>
                                    <h3 class="post-title">
                                        <a href="blog-details-left-sidebar.html">Industry Ministry to Hike</a>
                                    </h3>
                                    <p class="post-excerpt">Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Saepe minus, illo error ratione eos ex.…</p>
                                    <a href="blog-details-left-sidebar.html" class="see-more-link">SEE MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-post-slider__single-slide blog-post-slider__single-slide--grid-view">
                                <div class="blog-post-slider__image section-space--bottom--30">
                                    <a href="blog-details-left-sidebar.html"><img width="370" height="240" src="{{asset('assets/img/blog/2.webp')}}"
                                            class="img-fluid" alt=""></a>
                                </div>
                                <div class="blog-post-slider__content">
                                    <p class="post-date"> AUGUST 4, 2019</p>
                                    <h3 class="post-title">
                                        <a href="blog-details-left-sidebar.html">Worker Safety: India Appeals</a>
                                    </h3>
                                    <p class="post-excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Nemo exercitationem consequuntur …</p>
                                    <a href="blog-details-left-sidebar.html" class="see-more-link">SEE MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-post-slider__single-slide blog-post-slider__single-slide--grid-view">
                                <div class="blog-post-slider__image section-space--bottom--30">
                                    <a href="blog-details-left-sidebar.html"><img width="370" height="240" src="{{asset('assets/img/blog/3.webp')}}"
                                            class="img-fluid" alt=""></a>
                                </div>
                                <div class="blog-post-slider__content">
                                    <p class="post-date"> AUGUST 4, 2019</p>
                                    <h3 class="post-title">
                                        <a href="blog-details-left-sidebar.html">Lorem ipsum dolor sit amet.</a>
                                    </h3>
                                    <p class="post-excerpt">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit. Libero ipsum voluptatum ab nobis tempora dolores officia porro …</p>
                                    <a href="blog-details-left-sidebar.html" class="see-more-link">SEE MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of blog grid area  ====================-->

@endsection
