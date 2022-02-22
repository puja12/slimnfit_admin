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
                            <input type="text" name="weight" class="form-control" id="weight" placeholder="Weight">
                            <label for="weight">Weight (kgs)</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                            
                            <input type="text" name="height" class="form-control" id="height" placeholder="height">
                            <label for="height">Height (m)</label>
                            </div>
                        </div>
                        </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-floating">
                    <input type="text" name="bmi" class="form-control" id="bmi" placeholder="BMI" readonly>
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
                    <input type="text" name="age" class="form-control" id="age" placeholder="Your Name" readonly>
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

<script>
$(document).ready(function() {
  function calculateBMI() {
      var weight = document.getElementById('weight').value;
      var height = document.getElementById('height').value; //  / 100;
      //var output = document.getElementById('output');

      var bmi = weight / (height * height);
      var result = "";

      if (bmi < 18.5) {
        result = "Underweight";
      } else if (bmi > 25 && bmi <= 30) {
        result = "Overweight";
      } else if (bmi > 30) {
        result = "Obese";
      } else {
        result = "Normal";
      }

      bmi = bmi.toFixed(2);
      
      if (bmi && bmi != Number.POSITIVE_INFINITY && !isNaN(bmi)) {
        document.getElementById('bmi').value=bmi;
      } else {
        document.getElementById('bmi').value='';
      }
  }

  document.getElementById('weight').addEventListener('keyup', calculateBMI);
  document.getElementById('height').addEventListener('keyup', calculateBMI);
//document.getElementById('button1').addEventListener('click', calculateBMI);

  var dob = document.getElementById('dob');
  var age = document.getElementById('age');
      $('#dob').keyup(function(){
        var birthdate = new Date(dob.value);
        var cur = new Date();
        var diff = cur-birthdate;
        var cal_age = Math.floor(diff/31536000000);
          age.value = cal_age;
      });
});
                        
</script>
    @endsection