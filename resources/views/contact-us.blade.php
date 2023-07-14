@extends('layouts.app')
@section('body')

   <!--====================  breadcrumb area ====================-->
   <div class="breadcrumb-area bg-img" data-bg="{{asset('assets/img/backgrounds/funfact-bg.webp')}}">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-banner text-center">
                    <h1>Contact Us</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!--====================  End of breadcrumb area  ====================-->
<div class="page-wrapper section-space--inner--120">
    <!--Contact section start-->
    <div class="conact-section">
        <div class="container">

            <div class="row section-space--bottom--50" style="margin-bottom: 20px">
                <div class="col">
                    <div id="contact-map" class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.658253522201!2d77.23130742444074!3d28.519927989187206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce19b72072caf%3A0x8ce75562e7541331!2sCentral%20Market%2C%20Sector%204%2C%20Madangir%2C%20New%20Delhi%2C%20Delhi%20110062!5e0!3m2!1sen!2sin!4v1689258456336!5m2!1sen!2sin" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 200px">
                <div class="col-lg-4 col-12">
                    <div class="contact-information">
                        <h3>Contact Information</h3>
                        <ul>
                            <li>
                                <span class="icon"><i class="ion-android-map"></i></span>
                                <span class="text"><span>Central market, New Delhi, Building Apt. C 25 3rd floor, 110024, India</span></span>
                            </li>
                            <li>
                                <span class="icon"><i class="ion-ios-telephone-outline"></i></span>
                                <span class="text"><a href="#">+91 8768508744</a></span>
                            </li>
                            <li>
                                <span class="icon"><i class="ion-ios-email-outline"></i></span>
                                <span class="text"><a href="#">support@technosofthunter.com</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="contact-form">
                        <h3>Leave Your Message</h3>
                        <form id="contact-form" action="http://whizthemes.com/mail-php/mail.php" method="post">
                            <div class="row row-10">
                                <div class="col-md-6 col-12 section-space--bottom--20"><input name="con_name" type="text" placeholder="Your Name"></div>
                                <div class="col-md-6 col-12 section-space--bottom--20"><input name="con_email" type="email" placeholder="Your Email"></div>
                                <div class="col-12"><textarea name="con_message" placeholder="Your Message"></textarea></div>
                                <div class="col-12"><button>Send Message</button></div>
                            </div>
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--Contact section end-->
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