<!-- resources/views/index.blade.php -->
@extends('frontend.layouts.master') <!-- Extend the master layout -->

@section('title', 'Available Flights | Jetly') <!-- Set the title for this page -->

@section('section_title', 'Available Flights') 

@section('content') <!-- Start the content section -->    
        <!--Destinations Page Start-->
        <section class="destinations-page">
            <div class="container">
                <div class="row">
                    @foreach($flights as $flight)
                    <!--Destinations One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="destination-one__single">
                            <div class="destination-one__img-box">
                                <div class="destination-one__img">
                                    <img src="{{ asset('assets/frontend/images/resources/destination-1-1.jpg') }}" alt="">
                                </div>
                                <div class="destination-one__content">
                                    <h3 class="destination-one__title" style="font-size:18px!important;"><a href="{{ route('flight-details',['id'=>$flight['id']]) }}">{{$flight['origin_airport']}} -
                                        {{$flight['destination_airport']}}</a></h3>
                                    <div class="destination-one__time">
                                        <div class="destination-one__paris-time">
                                            <p>Date: <span>{{ $flight['date'] }}</span></p>
                                        </div>
                                        <div class="destination-one__barcelona-time">
                                            <p>Time: <span>{{ $flight['time'] }}</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--Destinations Page End-->

@endsection <!-- End the content section -->