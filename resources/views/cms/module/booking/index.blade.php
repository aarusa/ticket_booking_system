@extends('cms.layouts.master') <!-- Extend the master layout -->

@section('title', 'Jetly | Online Ticket Booking') <!-- Set the title for this page -->

@section('content') <!-- Start the content section -->

    <!-- partial:partials/_navbar.html -->
    @include('cms.layouts.partials._navbar')

      <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('cms.layouts.partials._sidebar')

        <!-- partial -->
        <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Bookings</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('dashboard') }}" style="text-decoration:none; color:inherit;"><b>Dashboard</b></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Bookings</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    {{-- <a type="button" href="{{ url('airlines/create') }}" class="btn btn-gradient-primary btn-fw" style="float:right;">Add New Airline</a> --}}
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>SN</th>
                          <th>Passenger</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Origin</th>
                          <th>Destination</th>
                          <th>Date</th>
                          <th>Payment Status</th>
                          <th>Booking Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($bookings as $booking)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $booking->user->fname }} <span style="margin-right:1px;"></span>{{ $booking->user->lname }}</td>
                          <td>{{ $booking->user->email }}</td>
                          <td>{{ $booking->user->mobile }}</td>
                          <td>{{ $booking->flightSchedule->origin_airport }}</td>
                          <td>{{ $booking->flightSchedule->destination_airport }}</td>
                          <td>{{ $booking->flightSchedule->date }}</td>
                          <td>{{ $booking->payment_status }}</td>
                          <td>{{ $booking->booking_status }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          @include('cms.layouts.partials._footer')
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->


@endsection <!-- End the content section -->