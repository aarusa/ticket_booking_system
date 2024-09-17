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
              <h3 class="page-title">Airlines</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('dashboard') }}" style="text-decoration:none; color:inherit;"><b>Dashboard</b></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Airlines</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <a type="button" href="{{ url('airlines/create') }}" class="btn btn-gradient-primary btn-fw" style="float:right;">Add New Airline</a>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>SN</th>
                          <th>Airline Name</th>
                          <th>Country</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($airlines as $airline)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $airline->name }}</td>
                          <td>{{ $airline->country }}</i></td>
                          <td>
                            <a href="{{ route('airlines.edit', $airline->id) }}" type="button" class="btn btn-warning btn-sm">Edit</a>&nbsp;&nbsp;
                            <form action="{{ route('airlines.destroy', $airline->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure you want to delete this user?');">Delete</button>
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