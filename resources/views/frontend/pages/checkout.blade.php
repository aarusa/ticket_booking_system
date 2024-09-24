<!-- resources/views/index.blade.php -->
@extends('frontend.layouts.master') <!-- Extend the master layout -->

@section('title', 'Checkout | Jetly') <!-- Set the title for this page -->

@section('section_title', 'Checkout') 

@section('content') <!-- Start the content section --> 

        <!--Start Checkout Page-->
        <section class="checkout-page">
            <div class="container">
                <form class="billing_details_form" method="POST" action="{{ route('confirm-booking') }}">
                    @csrf
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="billing_details">
                                <div class="billing_title">
                                    {{-- <p>Returning Customer? <span>Click here to Login</span></p> --}}
                                    <h2>Passenger details</h2>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-xl-12">
                                        <div class="billing_input_box">
                                            <div class="select-box">
                                                <select class="wide">
                                                    <option data-display="Select a country">Select a country</option>
                                                    <option value="1">Canada</option>
                                                    <option value="2">England</option>
                                                    <option value="3">Australia</option>
                                                    <option value="3">USA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <input type="hidden" name="flight_id" value="{{$flight['id']}}" />
                                <div class="row bs-gutter-x-20">
                                    <div class="col-xl-4">
                                        <div class="billing_input_box">
                                            <input type="text" name="fname" placeholder="First name"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="billing_input_box">
                                            <input type="text" name="mname" placeholder="Middle name">
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="billing_input_box">
                                            <input type="text" name="lname" placeholder="Last name"
                                                required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="billing_input_box">
                                            <div class="select-box">
                                                <select class="wide" name="gender">
                                                    <option data-display="Select gender">Select gender</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row bs-gutter-x-20">
                                    <div class="col-xl-6">
                                        <div class="billing_input_box">
                                            <input name="email" type="email" placeholder="Email address">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="billing_input_box">
                                            <input type="tel" name="mobile"
                                                required="" placeholder="Phone">
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="billing_input_box">
                                            <input type="text" name="street" placeholder="Street Address" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="billing_input_box">
                                            <div class="select-box">
                                                <select class="wide" name="state">
                                                    <option data-display="Select state">Select state</option>
                                                    <option value="New South Wales">New South Wales</option>
                                                    <option value="Victoria">Victoria</option>
                                                    <option value="Queensland">Queensland</option>
                                                    <option value="South Australia">South Australia</option>
                                                    <option value="Western Australia">Western Australia</option>
                                                    <option value="Tasmania">Tasmania</option>
                                                    <option value="Northern Territory">Northern Territory</option>
                                                    <option value="Australian Capital Territory">Australian Capital Territory</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="billing_input_box">
                                            <input name="zip" type="text" placeholder="Zip code">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="your_order">
                        <h2>Flight Details</h2>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="order_table_box">
                                    <table class="order_table_detail">
                                        <thead class="order_table_head">
                                            <tr>
                                                {{-- <th>Product</th>
                                                <th class="right">Price</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="pro__title">Origin</td>
                                                <td class="pro__price">{{ $flight['origin_airport'] }}</td>
                                            </tr>
                                            <tr>
                                                <td class="pro__title">Destination</td>
                                                <td class="pro__price">{{ $flight['destination_airport'] }}</td>
                                            </tr>
                                            <tr>
                                                <td class="pro__title">Date</td>
                                                <td class="pro__price">{{ $flight['date'] }} <span style="margin-right:2px;"></span> {{ $flight['time'] }}</td>
                                            </tr>
                                            <tr>
                                                <td class="pro__title">Duration</td>
                                                <td class="pro__price">{{ $flight['duration'] }}hrs</td>
                                            </tr>
                                            <tr>
                                                <td class="pro__title">Price</td>
                                                <td class="pro__price">${{ $flight['price'] }}</td>
                                            </tr>
                                            <tr>
                                                <td class="pro__title">Baggage</td>
                                                <td class="pro__price">{{ $flight['baggage_allowance'] }}kg</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="checkout__payment">
                                    <div class="checkout__payment__item checkout__payment__item--active">
                                        <h3 class="checkout__payment__title">Direct bank transfer</h3>
                                        <div class="checkout__payment__content">
                                            Make your payment directly into our bank account. Please
                                            use your Order ID as the payment reference. Your order
                                            wont be shipped until the funds have cleared.
                                        </div><!-- /.checkout__payment__content -->
                                    </div><!-- /.checkout__payment__item -->
                                    <div class="checkout__payment__item">
                                        <h3 class="checkout__payment__title">Paypal payment <img
                                                src="assets/images/shop/paypal-1.jpg" alt=""></h3>
                                        <div class="checkout__payment__content">
                                            Make your payment directly into our bank account. Please
                                            use your Order ID as the payment reference. Your order
                                            wont be shipped until the funds have cleared.
                                        </div><!-- /.checkout__payment__content -->
                                    </div><!-- /.checkout__payment__item -->
                                </div><!-- /.checkout__payment -->
                                <div class="text-right d-flex justify-content-end">
                                    <button type="submit" class="thm-btn">Confirm Booking</button>
                                </div><!-- /.text-right -->

                            </div><!-- /.col-lg-6 -->
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!--End Checkout Page-->

@endsection