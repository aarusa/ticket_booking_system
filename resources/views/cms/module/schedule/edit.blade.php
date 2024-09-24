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
              <h3 class="page-title">Edit Schedule</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('schedule') }}" style="text-decoration:none; color:inherit;"><b>Flight Schedule</b></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Schedule</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" method="POST" action="{{ route('schedule.store') }}">
                        @csrf
                      <div class="form-group">
                        <label for="flight_number">Flight Number</label>
                        <input type="text" class="form-control" id="flight_number" placeholder="Flight Number" name="flight_number" required>
                      </div>
                      <div class="form-group">
                        <label for="airlineName">Airlines</label>
                        <select class="form-select" id="airlineName" name="airline_name" required>
                          <option>Qantas Airlines</option>
                          <option>Fly Emirates</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="origin_airport">Origin Airport</label>
                        <select class="form-select" id="origin_airport" name="origin_airport" required>
                          <option>Australia</option>
                          <option>Dubai</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="destination_airport">Destination Airport</label>
                        <select class="form-select" id="destination_airport" name="destination_airport" required>
                          <option>Australia</option>
                          <option>Dubai</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" placeholder="Date" name="date" required>
                      </div>
                      <div class="form-group">
                        <label for="time">Time</label>
                        <input type="time" class="form-control" id="time" placeholder="Time" name="time" required>
                      </div>
                      <div class="form-group">
                        <label for="duration">Duration</label>
                        <input type="text" class="form-control" id="duration" placeholder="Duration" name="duration" required>
                      </div>
                      <div class="form-group">
                        <label for="available_seats">Available Seats</label>
                        <input type="text" class="form-control" id="available_seats" placeholder="Available no. of seats" name="available_seats" required>
                      </div>
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" placeholder="Price" name="price" required>
                      </div>
                      <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-select" id="status" name="status" required>
                          <option>Scheduled</option>
                          <option>Not Scheduled</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="baggage_allowance">Baggage Allowance</label>
                        <input type="text" class="form-control" id="baggage_allowance" placeholder="Baggage Allowance" name="baggage_allowance" required>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <a href="{{ url('schedule') }}" type="cancel" class="btn btn-light">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          @include('cms.layouts.partials._footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->


@endsection <!-- End the content section -->