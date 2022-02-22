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
              <form class="row g-3" method="post" action="{{ route('storeclient')}}">
                @csrf
                <div class="col-sm-4">
                  <div class="form-floating">
                    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Your Name">
                    <label for="firstname">First Name</label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-floating">
                    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Your Name">
                    <label for="lastname">Last Name</label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                    <label for="email">Email</label>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-floating mb-3">
                    <select name="gender" class="form-select" id="gender" aria-label="State">
                      <option value="male"selected>Male</option>
                      <option value="female">Female</option>
                      <option value="others">Others</option>
                    </select>
                    <label for="gender">Gender</label>
                  </div>
                </div>

                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-floating">
                            
                            <label for="weight" class="form-label">Weight (kgs)</label>
                            <input type="text" name="weight" class="form-control" id="weight">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                            
                            <label for="height" class="form-label">Height (m)</label>
                            <input type="text" name="height" class="form-control" id="height">
                            </div>
                        </div>
                        </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-floating">
                    <input type="text" name="bmi" class="form-control" id="bmi" placeholder="Your Name">
                    <label for="bmi">BMI</label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-floating">
                    <textarea class="form-control" name="address" placeholder="Address" id="address" style="height: 60px;"></textarea>
                    <label for="address">Address</label>
                  </div>
                </div>
                <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input type="text" name="city" class="form-control" id="city" placeholder="City">
                      <label for="city">City</label>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-floating mb-3">
                      <select name="state" class="form-select" id="state" aria-label="State">
                        <option value="Maharashtra" selected>Maharashtra</option>
                        <option value="Karnakata">Karnakata</option>
                        <option value="Goa">Goa</option>
                      </select>
                      <label for="state">State</label>
                    </div>
                  </div>
                  </div>
                </div>
                
                <div class="col-sm-4">
                  <div class="form-floating">
                    <input type="text" name="pincode" class="form-control" id="pincode" placeholder="Zip">
                    <label for="pincode">Zip</label>
                  </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-floating">
                            <input type="date" id="dob" name="dob" class="form-control">
                            <label for="dob" >Date of Birth</label>
                    </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-floating">
                    <input type="text" name="age" class="form-control" id="age" placeholder="Your Name">
                    <label for="age">Age</label>
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