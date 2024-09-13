<!-- resources/views/index.blade.php -->
@extends('frontend.layouts.master') <!-- Extend the master layout -->

@section('title', 'Contact Us | Jetly') <!-- Set the title for this page -->

@section('section_title', 'Contact') 

@section('content') <!-- Start the content section -->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">contact us</span>
                    <h2 class="section-title__title">Feel free to get in touch <br> with the jetly</h2>
                </div>
                <div class="row">
                    <!--Contact Page Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="contact-page__single">
                            <div class="contact-page__title-box">
                                <div class="contact-page__title">
                                    <span>know</span>
                                    <h3>About us</h3>
                                </div>
                                <div class="contact-page__icon">
                                    <span class="icon-flight-1"></span>
                                </div>
                            </div>
                            <p class="contact-page__text">Non augue egestas, commodo velit eget, tellus.</p>
                        </div>
                    </div>
                    <!--Contact Page Single End-->
                    <!--Contact Page Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="contact-page__single">
                            <div class="contact-page__title-box">
                                <div class="contact-page__title">
                                    <span>write</span>
                                    <h3>Send email</h3>
                                </div>
                                <div class="contact-page__icon">
                                    <span class="icon-envelope-back"></span>
                                </div>
                            </div>
                            <p class="contact-page__text">
                                <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                                <a href="mailto:info@comapny.com">info@comapny.com</a>
                            </p>
                        </div>
                    </div>
                    <!--Contact Page Single End-->
                    <!--Contact Page Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="contact-page__single">
                            <div class="contact-page__title-box">
                                <div class="contact-page__title">
                                    <span>book</span>
                                    <h3>Call now</h3>
                                </div>
                                <div class="contact-page__icon contact-page__icon--last">
                                    <span class="icon-call"></span>
                                </div>
                            </div>
                            <p class="contact-page__text">
                                <a href="tel:9288006780">+92 ( 8800 ) - 6780</a>
                                <a href="tel:0066680900">Jetly + 00 66680 900</a>
                            </p>
                        </div>
                    </div>
                    <!--Contact Page Single End-->
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Contact One Start-->
        <section class="contact-one">
            <div class="container">
                <div class="contact-one__form-box">
                    <form action="assets/inc/sendemail.php" class="contact-one__form contact-form-validated"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Your name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="email" placeholder="Email address" name="email">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Phone number" name="phone">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Subject" name="subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-form__input-box text-message-box">
                                    <textarea name="message" placeholder="Write message"></textarea>
                                </div>
                                <div class="contact-form__btn-box">
                                    <button type="submit" class="thm-btn contact-form__btn">Send a message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--Contact One End-->

        <!--Google Map Start-->
        <section class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="google-map__one" allowfullscreen></iframe>

        </section>
        <!--Google Map End-->

@endsection <!-- End the content section -->