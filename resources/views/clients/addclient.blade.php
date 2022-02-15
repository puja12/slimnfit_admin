@extends('layouts.app')
@section('title','Add Client')
@section('content')
<div class="pagetitle">
      <h1>Clients : </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Clients</li>
          <li class="breadcrumb-item active">Add</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Client Details</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3">
                <div class="col-sm-4">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">First Name</label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">Last Name</label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="floatingEmail" placeholder="Your Email">
                    <label for="floatingEmail">Email</label>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="State">
                      <option selected>Male</option>
                      <option value="1">Female</option>
                      <option value="2">Others</option>
                    </select>
                    <label for="floatingSelect">Gender</label>
                  </div>
                </div>

                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-floating">
                            
                            <label for="inputZip" class="form-label">Weight (kgs)</label>
                            <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                            
                            <label for="inputZip" class="form-label">Height (m)</label>
                            <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">BMI</label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 60px;"></textarea>
                    <label for="floatingTextarea">Address</label>
                  </div>
                </div>
                <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingCity" placeholder="City">
                      <label for="floatingCity">City</label>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-floating mb-3">
                      <select class="form-select" id="floatingSelect" aria-label="State">
                        <option selected>New York</option>
                        <option value="1">Oregon</option>
                        <option value="2">DC</option>
                      </select>
                      <label for="floatingSelect">State</label>
                    </div>
                  </div>
                  </div>
                </div>
                
                <div class="col-sm-4">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingZip" placeholder="Zip">
                    <label for="floatingZip">Zip</label>
                  </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-floating">
                            <input type="date" class="form-control">
                            <label for="inputDate" >Date</label>
                    </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">Age</label>
                  </div>
                </div>
                
                

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

            
          </div>

        </div>
      </div>
    </section>

    @endsection