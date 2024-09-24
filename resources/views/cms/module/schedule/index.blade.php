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
              <h3 class="page-title">Flight Schedule</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('dashboard') }}" style="text-decoration:none; color:inherit;"><b>Dashboard</b></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Flight Schedule</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <a type="button" href="{{ url('schedule/create') }}" class="btn btn-gradient-primary btn-fw" style="float:right;">Add New Schedule</a>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>SN</th>
                          <th>Flight Number</th>
                          <th>Origin Airport</th>
                          <th>Destination Airport</th>
                          <th>Date</th>
                          <th>Time</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($schedules as $schedule)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $schedule->flight_number }}</td>
                          <td>{{ $schedule->origin_airport }}</td>
                          <td>{{ $schedule->destination_airport }}</td>
                          <td>{{ $schedule->date }}</td>
                          <td>{{ $schedule->time }}</td>
                          <td>
                            <a href="{{ route('schedule.edit', $schedule->id) }}" type="button" class="btn btn-warning btn-sm">Edit</a>&nbsp;&nbsp;
                            <form action="{{ route('schedule.destroy', $schedule->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure you want to delete this schedule?');">Delete</button>
                            </form>
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
          <!-- content-wrapper ends -->
          @include('cms.layouts.partials._footer')
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->


@endsection <!-- End the content section -->