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
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Flight Schedule</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <button type="button" class="btn btn-gradient-primary btn-fw" style="float:right;">Add New Airline</button> -->
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
                        <tr>
                          <td>1</td>
                          <td>Turkish Airlines</td>
                          <td>Turkey</i></td>
                          <td><label class="badge badge-warning">Edit</label>&nbsp;&nbsp;<label class="badge badge-danger">Delete</label></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Qatar Airlines</td>
                          <td>Qatar</i></td>
                          <td><label class="badge badge-warning">Edit</label>&nbsp;&nbsp;<label class="badge badge-danger">Delete</label></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Fly Emirates</td>
                          <td>Dubai</i></td>
                          <td><label class="badge badge-warning">Edit</label>&nbsp;&nbsp;<label class="badge badge-danger">Delete</label></td>
                        </tr>
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