<!-- resources/views/index.blade.php -->
@extends('frontend.layouts.master') <!-- Extend the master layout -->

@section('title', 'Flight Details | Jetly') <!-- Set the title for this page -->

@section('section_title', 'Flight Details') 

@section('content') <!-- Start the content section -->   

        <!--Destination Details Start-->
        <section class="destination-details">
            <div class="container">
                <div class="destination-details__top">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8">
                            <div class="destination-details__top-left">
                                <div class="destination-details__top-img">
                                    <img src="{{ asset('assets/frontend/images/resources/destination-details-top-img-1.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <div class="destination-details__top-right">
                                <div class="destination-details__details-box">
                                    <ul class="list-unstyled destination-details__details-list">
                                        <li>
                                            <p class="destination-details__client">Date:</p>
                                            <h4 class="destination-details__name">{{$flight['date']}}</h4>
                                        </li>
                                        <li>
                                            <p class="destination-details__client">Time:</p>
                                            <h4 class="destination-details__name">{{$flight['time']}}</h4>
                                        </li>
                                        <li>
                                            <p class="destination-details__client">Price:</p>
                                            <h4 class="destination-details__name">${{$flight['price']}}</h4>
                                        </li>
                                        <li>
                                            <p class="destination-details__client">Duration:</p>
                                            <h4 class="destination-details__name">{{$flight['duration']}}hrs</h4>
                                        </li>
                                        <li>
                                            <p class="destination-details__client">Baggage:</p>
                                            <h4 class="destination-details__name">{{$flight['baggage_allowance']}}kg</h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="destination-details__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="destination-details__bottom-inner">
                                <h3 class="destination-details__title" style="margin-top:10px;">{{$flight['origin_airport']}} - {{$flight['destination_airport']}}</h3>
                                <div class="get-flight__form-input-box">
                                    <a href="{{route('checkout',['id'=>$flight['id']])}}" type="submit" class="thm-btn get-flight__btn" style="margin-bottom: 40px;">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Destination Details End-->

@endsection