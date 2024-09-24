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
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{ asset('assets/cms/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Bookings <i class="mdi mdi-calendar-month mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">{{ $bookingCount }}</h2>
                    {{-- <h6 class="card-text">Increased by 60%</h6> --}}
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{ asset('assets/cms/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Flights Scheduled <i class="mdi mdi-airplane-clock mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">{{ $scheduleCount }}</h2>
                    {{-- <h6 class="card-text">Decreased by 10%</h6> --}}
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{ asset('assets/cms/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Airports <i class="mdi mdi-airplane mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">{{ $airlineCount }}</h2>
                    {{-- <h6 class="card-text">Increased by 5%</h6> --}}
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Flights Scheduled</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Origin Airport </th>
                            <th> Destination Airport </th>
                            <th> Date </th>
                            <th> Time </th>
                            <th> Duration </th>
                            <th> Status </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($flights as $flight)
                          <tr>
                            <td>
                              {{ $flight->origin_airport }}
                            </td>
                            <td> {{ $flight->destination_airport }} </td>
                            <td> {{ $flight->date }} </td>
                            <td> {{ $flight->time }} </td>
                            <td> {{ $flight->duration }}hrs </td>
                            <td>
                              <label class="badge badge-gradient-success"> {{ $flight->status }} </label>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
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