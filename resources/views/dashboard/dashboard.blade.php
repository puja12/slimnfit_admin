@extends('layouts.app')
@section('title','Dashboard')
@section('content')


    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns
        <div class="col-lg-10"> 
          <div class="row">-->
            <!-- Customers Card -->
            <div class="col-xxl-2 col-md-4">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Clients </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$client_cnt}}</h6>
                      
                    </div>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a href="{{route('client.list')}}" class="btn btn-primary btn-sm" title="View Client List"><i class="bi bi-eye-fill"></i>  </a>
                    <a href="{{route('addclients')}}" class="btn btn-primary btn-sm" title="Add new Client"><i class="bi bi-plus-square"></i></a>
                  </div>
                </div>
              </div>
            </div><!-- End Customers Card -->
            
            <!-- Sales Card -->
            <div class="col-xxl-2 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Diet Plans </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-card-list"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                    </div>
                  </div>

                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-eye-fill"></i>  </a>
                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-plus-square"></i></a>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-2 col-md-4">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Food </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bx bx-food-tag"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                    </div>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-eye-fill"></i>  </a>
                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-plus-square"></i></a>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

          <!-- </div>
          </div>- End Left side columns -->

        
      </div>

      <div class="row">

        <!-- Left side columns
        <div class="col-lg-10"> 
          <div class="row">-->
            <!-- Customers Card -->
            <div class="col-xxl-2 col-md-4">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Recipes</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bx bx-food-menu"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                    </div>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-eye-fill"></i>  </a>
                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-plus-square"></i></a>
                  </div>
                </div>
              </div>

            </div><!-- End Customers Card -->
            
            <!-- Sales Card -->
            <div class="col-xxl-2 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Questionnaire</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-envelope"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                    </div>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-eye-fill"></i>  </a>
                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-plus-square"></i></a>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-2 col-md-4">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Testimonials</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-chat-dots"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                    </div>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-eye-fill"></i>  </a>
                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-plus-square"></i></a>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

          <!-- </div>
          </div>- End Left side columns -->

        
      </div>
    </section>


@endsection