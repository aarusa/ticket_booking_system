<!-- resources/views/index.blade.php -->
@extends('frontend.layouts.master') <!-- Extend the master layout -->

@section('title', 'Jetly | Book your ticket now ') <!-- Set the title for this page -->

@section('content') <!-- Start the content section -->
    
<!--Main Slider Start-->
        <section class="main-slider-three clearfix" id="home">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{
                "slidesPerView": 1,
                "allowTouchMove": false,
                "loop": false,
                "effect": "fade",
                "pagination": {
                    "el": "#main-slider-pagination",
                    "type": "bullets",
                    "clickable": true
                },
                "navigation": {
                    "nextEl": "#main-slider__swiper-button-next",
                    "prevEl": "#main-slider__swiper-button-prev"
                }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-layer-three"
                            style="background-image: url(assets/frontend/images/backgrounds/cloud-1.png);"></div>
                        <!-- /.image-layer -->
                        <div class="main-slider-three__img">
                            <img src="assets/frontend/images/resources/main-slider-three-img-1.png" alt="" class="float-bob-y">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="main-slider-three__content">
                                        <p class="main-slider-three__sub-title">Private Jets Charters</p>
                                        <h2 class="main-slider-three__title">Save Time & <br> Fly with Comfort</h2>
                                        <div class="main-slider-three__btn-box">
                                            <a href="/contact" class="thm-btn main-slider__btn">Book Now</a>
                                            <a href="#about" class="thm-btn main-slider__btn-two">Know More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer-three float-bob-x"
                            style="background-image: url(assets/frontend/images/backgrounds/main-slider-3-1.png);"></div>
                        <!-- /.image-layer -->
                        <div class="main-slider-three__img">
                            <img src="assets/frontend/images/resources/main-slider-three-img-1.png" alt="" class="float-bob-y">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="main-slider-three__content">
                                        <p class="main-slider-three__sub-title">Private Jets Charters</p>
                                        <h2 class="main-slider-three__title">Save Time & <br> Fly with Comfort</h2>
                                        <div class="main-slider-three__btn-box">
                                            <a href="contact.html" class="thm-btn main-slider__btn">Book Now</a>
                                            <a href="about.html" class="thm-btn main-slider__btn-two">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- If we need navigation buttons -->


            </div>
        </section>
        <!--Main Slider End-->

        <!--Request Start-->
        <section class="request">
            <div class="request__shape-1 float-bob-x">
                <img src="assets/frontend/images/shapes/request-shape-1.png" alt="">
            </div>
            <div class="request__shape-2 float-bob-x">
                <img src="assets/frontend/images/shapes/request-shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="request__top">
                    <form action="assets/frontend/inc/sendemail.php" class="request__form contact-form-validated"
                        novalidate="novalidate">
                        <ul class="list-unstyled request__input-list clearfix">
                            <li>
                                <div class="request__input-box">
                                    <input type="text" placeholder="Fly from">
                                </div>
                            </li>
                            <li>
                                <div class="request__input-box">
                                    <input type="text" placeholder="Fly to">
                                </div>
                            </li>
                            <li>
                                <div class="request__input-box">
                                    <input type="text" name="date" placeholder="Select date" id="datepicker">
                                    <div class="get-flight__icon-box">
                                        <i class="far fa-calendar-alt"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="request__input-box">
                                    <input type="text" name="time" placeholder="Select time">
                                </div>
                            </li>
                            <li>
                                <div class="request__input-box">
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="Passengers">Passengers</option>
                                            <option value="1">Passengers 01</option>
                                            <option value="2">Passengers 02</option>
                                            <option value="3">Passengers 03</option>
                                            <option value="4">Passengers 04</option>
                                        </select>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="request__bottom">
                            <p class="request__bottom-text"> <span>*</span> After sending request. We’ll contact you for
                                more details about charter.</p>
                            <button type="submit" class="thm-btn request__btn">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--Request End-->

        <!--About Three Start-->
        <section class="about-three" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-three__left">
                            <div class="about-three__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-three__img">
                                    <img src="assets/frontend/images/resources/about-three-1.jpg" alt="">
                                </div>
                                <div class="about-three__experience">
                                    <div class="about-three__curved-circle">
                                        <div class="curved-circle">
                                            <span class="curved-circle--item" data-circle-options='{
                                                "radius": 100
                                            }'>
                                                25 Years Experience
                                            </span>
                                        </div><!-- /.curved-circle -->
                                    </div>
                                    <div class="about-three__icon-box">
                                        <div class="about-three__icon">
                                            <img src="assets/frontend/images/icon/about-three-icon.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="about-three__shape-1 float-bob-x">
                                    <img src="assets/frontend/images/shapes/about-three-shape-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-three__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">What will you get</span>
                                <h2 class="section-title__title">Private jet for business
                                    and leisure purpose</h2>
                            </div>
                            <p class="about-three__text-one">Non augue egestas, commodo velit eget, vestibulum tellus.
                                Curabitur vulputate justo elit, at elementum orci pulvinar vel.</p>
                            <p class="about-three__text-two">Pellentesque habitant morbi tristique. Pellentesque
                                habitant morbi tristique. Ut non augue egestas, commodo velit eget, vestibulum tellus.
                            </p>
                            <ul class="about-three__points list-unstyled">
                                <li>
                                    <div class="about-three__points-icon">
                                        <span class="icon-travel-insurance"></span>
                                    </div>
                                    <div class="about-three__points-text">
                                        <h3>Proven safety</h3>
                                        <p>Lorem ipsum text</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-three__points-icon">
                                        <span class="icon-travel"></span>
                                    </div>
                                    <div class="about-three__points-text">
                                        <h3>On demand</h3>
                                        <p>Lorem ipsum text</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="about.html" class="thm-btn about-three__btn">Dicover more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Three End-->

        <!--Brand One Start-->
        <section class="brand-two">
            <div class="container">
                <div class="brand-two__title"></div>
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100,
                "slidesPerView": 5,
                "loop": true,
                "navigation": {
                    "nextEl": "#brand-one__swiper-button-next",
                    "prevEl": "#brand-one__swiper-button-prev"
                },
                "autoplay": { "delay": 5000 },
                "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/frontend/images/brand/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/frontend/images/brand/brand-1-2.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/frontend/images/brand/brand-1-3.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/frontend/images/brand/brand-1-4.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/frontend/images/brand/brand-1-5.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/frontend/images/brand/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/frontend/images/brand/brand-1-2.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/frontend/images/brand/brand-1-3.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/frontend/images/brand/brand-1-4.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/frontend/images/brand/brand-1-5.png" alt="">
                        </div><!-- /.swiper-slide -->
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="brand-two__nav">
                    <div class="swiper-button-prev" id="brand-one__swiper-button-next">
                        <i class="fas fa-angle-left"></i>
                    </div>
                    <div class="swiper-button-next" id="brand-one__swiper-button-prev">
                        <i class="fas fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->

        <!--We Fly Start-->
        <section class="we-fly">
            <div class="we-fly-bg-box">
                <div class="we-fly__bg" style="background-image: url(assets/frontend/images/backgrounds/we-fly-bg.jpg);"></div>
            </div>
            <div class="container">
                <img src="assets/frontend/images/shapes/we-fly-badge.png" alt="" class="we-fly__badge">
                <div class="row">
                    <div class="col-xl-7 col-lg-8">
                        <div class="we-fly__left">
                            <h3 class="we-fly__title count-box">We fly with you to over <span
                                    class="count-text we-fly__count" data-stop="6800" data-speed="1500">00</span>
                                destinations world wide</h3>
                            <p class="we-fly__text">Curly Airline proudly raises the bar and exceeds the standard for
                                luxury and <br> corporate private jet charter services.</p>
                            <div class="we-fly__btn-boxes">
                                <div class="we-fly__btn-one-box">
                                    <a href="contact.html" class="thm-btn we-fly__btn-one">Book Now</a>
                                </div>
                                <div class="we-fly__btn-two-box">
                                    <a href="about.html" class="thm-btn we-fly__btn-two">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--We Fly End-->

        <!--Charters Start-->
        <section class="charters" id="services">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">luxury charters</span>
                    <h2 class="section-title__title">Select the charters
                        <br> according to your need</h2>
                </div>
                <div class="row">
                    <!--charters Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="charters__single">
                            <div class="charters__img">
                                <img src="assets/frontend/images/resources/charters-1-1.jpg" alt="">
                            </div>
                            <div class="charters__content">
                                <p class="charters__date">6 - 8 seats</p>
                                <h3 class="charters__title"><a href="jet-rentals.html">Executive jet</a></h3>
                                <p class="charters__text">Non augue egestas, commodo simply free velit eget, tellus.</p>
                                <a href="jet-rentals.html" class="thm-btn charters__btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!--charters Single End-->
                    <!--charters Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="charters__single">
                            <div class="charters__img">
                                <img src="assets/frontend/images/resources/charters-1-2.jpg" alt="">
                            </div>
                            <div class="charters__content">
                                <p class="charters__date">4 - 6 seats</p>
                                <h3 class="charters__title"><a href="high-profile-people.html">Helicopter</a></h3>
                                <p class="charters__text">Non augue egestas, commodo simply free velit eget, tellus.</p>
                                <a href="high-profile-people.html" class="thm-btn charters__btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!--charters Single End-->
                    <!--charters Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="charters__single">
                            <div class="charters__img">
                                <img src="assets/frontend/images/resources/charters-1-3.jpg" alt="">
                            </div>
                            <div class="charters__content">
                                <p class="charters__date">4 - 8 seats</p>
                                <h3 class="charters__title"><a href="business-charter.html">Turbo prop</a></h3>
                                <p class="charters__text">Non augue egestas, commodo simply free velit eget, tellus.</p>
                                <a href="business-charter.html" class="thm-btn charters__btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!--charters Single End-->
                </div>
            </div>
        </section>
        <!--Charters End-->

        <!--Benefits One Start-->
        <section class="benefits-one" id="benefits">
            <div class="benefits-one__shape-1 float-bob-x">
                <img src="assets/frontend/images/shapes/benefits-one-shape-1.png" alt="">
            </div>
            <div class="benefits-one__shape-2 float-bob-y">
                <img src="assets/frontend/images/shapes/benefits-one-shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="benefits-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Our Benefits</span>
                                <h2 class="section-title__title">Learn more about
                                    private jet benefits</h2>
                            </div>
                            <p class="benefits-one__text">Lorem ipsum dolor sit amet, elit. Curabitur condimentum, <br>
                                lacus non faucibus congue.</p>
                            <a href="about.html" class="thm-btn benefits-one__btn">Dicover more</a>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="benefits-one__right">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <!--Benefit One Single Start-->
                                    <div class="benefits-one__single">
                                        <div class="benefits-one__content">
                                            <div class="benefits-one__icon">
                                                <span class="icon-travel-insurance-1"></span>
                                            </div>
                                            <div class="benefits-one__title">
                                                <h3><a href="about.html">Safety and <br> security</a></h3>
                                            </div>
                                        </div>
                                        <div class="benefits-one__arrow">
                                            <a href="about.html"><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <!--Benefit One Single End-->
                                    <!--Benefit One Single Start-->
                                    <div class="benefits-one__single">
                                        <div class="benefits-one__content">
                                            <div class="benefits-one__icon">
                                                <span class="icon-pilot"></span>
                                            </div>
                                            <div class="benefits-one__title">
                                                <h3><a href="about.html">Experienced <br> crew</a></h3>
                                            </div>
                                        </div>
                                        <div class="benefits-one__arrow">
                                            <a href="about.html"><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <!--Benefit One Single End-->
                                    <!--Benefit One Single Start-->
                                    <div class="benefits-one__single">
                                        <div class="benefits-one__content">
                                            <div class="benefits-one__icon">
                                                <span class="icon-plane"></span>
                                            </div>
                                            <div class="benefits-one__title">
                                                <h3><a href="about.html">Modern <br> aircrafts</a></h3>
                                            </div>
                                        </div>
                                        <div class="benefits-one__arrow">
                                            <a href="about.html"><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <!--Benefit One Single End-->
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <!--Benefit One Single Start-->
                                    <div class="benefits-one__single">
                                        <div class="benefits-one__content">
                                            <div class="benefits-one__icon">
                                                <span class="icon-plane"></span>
                                            </div>
                                            <div class="benefits-one__title">
                                                <h3><a href="about.html">Modern <br> aircrafts</a></h3>
                                            </div>
                                        </div>
                                        <div class="benefits-one__arrow">
                                            <a href="about.html"><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <!--Benefit One Single End-->
                                    <!--Benefit One Single Start-->
                                    <div class="benefits-one__single">
                                        <div class="benefits-one__content">
                                            <div class="benefits-one__icon">
                                                <span class="icon-globe"></span>
                                            </div>
                                            <div class="benefits-one__title">
                                                <h3><a href="about.html">All around <br> the globe</a></h3>
                                            </div>
                                        </div>
                                        <div class="benefits-one__arrow">
                                            <a href="about.html"><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <!--Benefit One Single End-->
                                    <!--Benefit One Single Start-->
                                    <div class="benefits-one__single">
                                        <div class="benefits-one__content">
                                            <div class="benefits-one__icon">
                                                <span class="icon-flight"></span>
                                            </div>
                                            <div class="benefits-one__title">
                                                <h3><a href="about.html">Personal <br> schedule</a></h3>
                                            </div>
                                        </div>
                                        <div class="benefits-one__arrow">
                                            <a href="about.html"><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <!--Benefit One Single End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Benefits One End-->

        <!--Counter Two Start-->
        <section class="counter-two">
            <div class="counter-two__shape-1"
                style="background-image: url(assets/frontend/images/shapes/counter-two-shape-1.png);"></div>
            <div class="container">
                <ul class="list-unstyled counter-two__list">
                    <li class="counter-two__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="counter-two__count-box count-box">
                            <h3 class="count-text" data-stop="395" data-speed="1500">00</h3>
                        </div>
                        <p class="counter-two__text">Professional pilots</p>
                    </li>
                    <li class="counter-two__single wow fadeInUp" data-wow-delay="200ms">
                        <div class="counter-two__count-box count-box">
                            <h3 class="count-text" data-stop="166" data-speed="1500">00</h3>
                        </div>
                        <p class="counter-two__text">Jet airplanes</p>
                    </li>
                    <li class="counter-two__single wow fadeInUp" data-wow-delay="300ms">
                        <div class="counter-two__count-box count-box">
                            <h3 class="count-text" data-stop="138" data-speed="1500">00</h3>
                        </div>
                        <p class="counter-two__text">Directions</p>
                    </li>
                    <li class="counter-two__single wow fadeInUp" data-wow-delay="400ms">
                        <div class="counter-two__count-box count-box">
                            <h3 class="count-text" data-stop="280" data-speed="1500">00</h3>
                        </div>
                        <p class="counter-two__text">World aiports</p>
                    </li>
                </ul>
            </div>
        </section>
        <!--Counter Two End-->

        <!--destination Three Start-->
        <section class="destination-three">
            <div class="destination-three__shape-1 float-bob-y">
                <img src="assets/frontend/images/shapes/destination-three-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="destination-three__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">What will you get</span>
                                <h2 class="section-title__title">Popular charter destinations</h2>
                            </div>
                            <p class="destination-three__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur condimentum, lacus <br> non faucibus congue, lectus quam viverra nulla, quis
                                egestas neque sapien ac magna.</p>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="destination-three__right">
                            <div class="destination-three__carousel owl-carousel owl-theme thm-owl__carousel"
                                data-owl-options='{
                                "loop": true,
                                "autoplay": false,
                                "margin": 30,
                                "nav": true,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 2
                                    },
                                    "992": {
                                        "items": 2
                                    },
                                    "1200": {
                                        "items": 2.93
                                    }
                                }
                            }'>
                                <!--destination One Single Start-->
                                <div class="item">
                                    <div class="destination-one__single">
                                        <div class="destination-one__img-box">
                                            <div class="destination-one__img">
                                                <img src="assets/frontend/images/resources/destination-2-1.jpg" alt="">
                                            </div>
                                            <div class="destination-one__content">
                                                <h3 class="destination-one__title"><a
                                                        href="destination-details.html">Paris - Barcelona</a></h3>
                                                <div class="destination-one__time">
                                                    <div class="destination-one__paris-time">
                                                        <p>Departure: <span>16:50</span></p>
                                                    </div>
                                                    <div class="destination-one__barcelona-time">
                                                        <p>Arrival: <span>20:42</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--destination One Single End-->
                                <!--destination One Single Start-->
                                <div class="item">
                                    <div class="destination-one__single">
                                        <div class="destination-one__img-box">
                                            <div class="destination-one__img">
                                                <img src="assets/frontend/images/resources/destination-1-2.jpg" alt="">
                                            </div>
                                            <div class="destination-one__content">
                                                <h3 class="destination-one__title"><a
                                                        href="destination-details.html">Hamburg – London</a></h3>
                                                <div class="destination-one__time">
                                                    <div class="destination-one__paris-time">
                                                        <p>Departure: <span>16:50</span></p>
                                                    </div>
                                                    <div class="destination-one__barcelona-time">
                                                        <p>Arrival: <span>20:42</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--destination One Single End-->
                                <!--destination One Single Start-->
                                <div class="item">
                                    <div class="destination-one__single">
                                        <div class="destination-one__img-box">
                                            <div class="destination-one__img">
                                                <img src="assets/frontend/images/resources/destination-1-3.jpg" alt="">
                                            </div>
                                            <div class="destination-one__content">
                                                <h3 class="destination-one__title"><a
                                                        href="destination-details.html">London – Madrid</a></h3>
                                                <div class="destination-one__time">
                                                    <div class="destination-one__paris-time">
                                                        <p>Departure: <span>16:50</span></p>
                                                    </div>
                                                    <div class="destination-one__barcelona-time">
                                                        <p>Arrival: <span>20:42</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--destination One Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--destination Three End-->

        <!--We Do Start-->
        <section class="we-do">
            <div class="we-do__wrap">
                <div class="we-do__left">
                    <div class="we-do__bg" style="background-image: url(assets/frontend/images/backgrounds/we-do-bg.jpg);"></div>
                    <div class="we-do__real-time">
                        <div class="we-do__real-time-shape">
                            <img src="assets/frontend/images/shapes/we-do-real-time-shape.png" alt="">
                        </div>
                        <div class="we-do__real-time-icon">
                            <span class="icon-check"></span>
                        </div>
                        <div class="we-do__real-time-content-box">
                            <h4 class="we-do__real-time-content">Real time pikup <br> notification</h4>
                        </div>
                    </div>
                </div>
                <div class="we-do__right">
                    <div class="we-do__shape-1 float-bob-y">
                        <img src="assets/frontend/images/shapes/we-do-shape-1.png" alt="">
                    </div>
                    <div class="we-do__content">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">What We Do</span>
                            <h2 class="section-title__title">Giving a different feels of traveling with us</h2>
                        </div>
                        <p class="we-do__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore aliqua.</p>
                        <div class="we-do__bottom">
                            <ul class="list-unstyled we-do__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-online-booking"></span>
                                    </div>
                                    <div class="content">
                                        <h4>Book a jet instantly</h4>
                                        <p>Services address a range of simply free application and infrastructure needs.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-fly"></span>
                                    </div>
                                    <div class="content">
                                        <h4>Fly with jetly</h4>
                                        <p>Services address a range of simply free application and infrastructure needs.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--We Do End-->

        <!--Blog Tne Start-->
        <section class="blog-two" id="news">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">from the Blog Posts</span>
                    <h2 class="section-title__title">Checkout latest aviation
                        <br> news and articles</h2>
                </div>
                <div class="row">
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/frontend/images/blog/news-1-1.jpg" alt="">
                                <a href="news-details.html">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__date">
                                    <p>18 July, 2022</p>
                                </div>
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="news-details.html"><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                    <li>
                                        <a href="news-details.html"><i class="fas fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="news-details.html">Few reason’s people choose to
                                        fly private jet charter</a></h3>
                                <div class="blog-one__btn">
                                    <a href="news-details.html">Read More<span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/frontend/images/blog/news-1-2.jpg" alt="">
                                <a href="news-details.html">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__date">
                                    <p>18 July, 2022</p>
                                </div>
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="news-details.html"><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                    <li>
                                        <a href="news-details.html"><i class="fas fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="news-details.html">A first-time flyer’s guide to
                                        private jets
                                        charters</a></h3>
                                <div class="blog-one__btn">
                                    <a href="news-details.html">Read More<span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/frontend/images/blog/news-1-3.jpg" alt="">
                                <a href="news-details.html">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__date">
                                    <p>18 July, 2022</p>
                                </div>
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="news-details.html"><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                    <li>
                                        <a href="news-details.html"><i class="fas fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="news-details.html">Rent a private jet everything
                                        you need to know about cost</a></h3>
                                <div class="blog-one__btn">
                                    <a href="news-details.html">Read More<span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                </div>
            </div>
        </section>
        <!--Blog Tne End-->

        <!--Cta Start-->
        <section class="cta-one">
            <div class="cta-one__bg-shape" style="background-image: url(assets/frontend/images/shapes/cta-one-bg-shape.png);">
            </div>
            <div class="container">
                <div class="cta-one__content">
                    <div class="cta-one__title">
                        <h3>Save your time and fly with jetly</h3>
                    </div>
                    <div class="cta-one__btn-box">
                        <a href="#" class="thm-btn cta-one__btn">call for booking</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Cta Start End-->


@endsection <!-- End the content section -->