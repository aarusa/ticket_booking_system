<!-- resources/views/index.blade.php -->
@extends('frontend.layouts.master') <!-- Extend the master layout -->

@section('title', 'FAQ | Jetly') <!-- Set the title for this page -->

@section('section_title', 'FAQ') 

@section('content') <!-- Start the content section -->       
    <!--FaQ Page Start-->
    <section class="faq-page">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">get Information</span>
                <h2 class="section-title__title">Frequently asked some <br> questions</h2>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-page__single">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>What aircraft are used for charter flights?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Sed rhoncus facilisis purus, at accumsan purus sagittis vitae. Nullam
                                            acelit at eros imperdiet pulvinar velut nisl. Pellentesque sit placerat
                                            neque amet sapien semper tempus.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>What drinks and food served on board the aircraft?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Sed rhoncus facilisis purus, at accumsan purus sagittis vitae. Nullam
                                            acelit at eros imperdiet pulvinar velut nisl. Pellentesque sit placerat
                                            neque amet sapien semper tempus.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion last-chiled">
                                <div class="accrodion-title">
                                    <h4>How much time will I save on a charter flight?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Sed rhoncus facilisis purus, at accumsan purus sagittis vitae. Nullam
                                            acelit at eros imperdiet pulvinar velut nisl. Pellentesque sit placerat
                                            neque amet sapien semper tempus.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-page__single">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-2">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>What aircraft are used for charter flights?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Sed rhoncus facilisis purus, at accumsan purus sagittis vitae. Nullam
                                            acelit at eros imperdiet pulvinar velut nisl. Pellentesque sit placerat
                                            neque amet sapien semper tempus.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>What drinks and food served on board the aircraft?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Sed rhoncus facilisis purus, at accumsan purus sagittis vitae. Nullam
                                            acelit at eros imperdiet pulvinar velut nisl. Pellentesque sit placerat
                                            neque amet sapien semper tempus.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion last-chiled">
                                <div class="accrodion-title">
                                    <h4>How much time will I save on a charter flight?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Sed rhoncus facilisis purus, at accumsan purus sagittis vitae. Nullam
                                            acelit at eros imperdiet pulvinar velut nisl. Pellentesque sit placerat
                                            neque amet sapien semper tempus.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FaQ Page End-->

    <!--Contact Two Start-->
    <section class="contact-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-two__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">contact us</span>
                            <h2 class="section-title__title">Feel free to write</h2>
                        </div>
                        <form action="assets/frontend/inc/sendemail.php" class="contact-one__form contact-form-validated"
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
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-form__input-box text-message-box">
                                        <textarea name="message" placeholder="Write message"></textarea>
                                    </div>
                                    <div class="contact-form__btn-box">
                                        <button type="submit" class="thm-btn contact-form__btn">Send a
                                            message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-two__right">
                        <div class="service-details__need-help">
                            <div class="service-details__need-help-bg"
                                style="background-image: url(assets/images/backgrounds/service-details-need-help-bg.jpg)">
                            </div>
                            <div class="service-details__need-help-icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <h2 class="service-details__need-help-title">Book instantly <br> private jet charters
                                <br> services</h2>
                            <div class="service-details__need-help-contact">
                                <p>Call anytime</p>
                                <a href="tel:9298006802">+92 (9800) - 6802</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Two End-->
@endsection <!-- End the content section -->