@extends('layouts.app')
@section('title','Add Client')
@section('content')
<style>
  .subtitles .card-title {
    padding: 10px 0 10px 0;
  }
  </style>
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
            <h5 class="card-title">Add Client</h5>
            <!-- Floating Labels Form -->
            <form class="row g-3" method="post" action="{{ route('storeclient')}}">
               @csrf
               <div class="subtitles">
                  <h6 class="card-title">Personal Details :</h6>
               </div>
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
                           <label for="height">Height (cm)</label>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-floating">
                           <input type="text" name="bmi" class="form-control" id="bmi" placeholder="BMI" readonly>
                           <label for="bmi">BMI</label>
                        </div>
                     </div>
                     <div class="col-sm-6" id="bmi_result">
                        <input type="hidden" name="category" class="form-control" id="category">
                     </div>
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
                     <label for="pincode">Pincode</label>
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
               <!-- end of personal details -->
               <div class="subtitles">
                  <h6 class="card-title">Medical History :</h6>
                  <div class="col-md-8 col-lg-9">
                     <div class="form-floating">
                        <textarea name="medical_history" class="form-control" id="medical_history" style="height: 100px"></textarea>
                        <label for="medical_history">Any Medical History,If YES please enter details</label>
                     </div>
                  </div>
               </div>
               <!-- end of Medical History-->

               <!-- Food Habits and lifestyle-->
               <div class="subtitles">
                  <h6 class="card-title">Food Habits and lifestyle :</h6>
               </div>
               <!--<legend class="col-form-label col-sm-2 pt-0">Radios</legend>-->
               <div class="col-sm-4">
                  <div class="row" style="margin-left: 2px;margin-bottom: 10px;padding-top: 15px;">
                     <div class="col-sm-6 form-check">
                        <input class="form-check-input" type="radio" name="food_cat" id="vegetarian" value="vegetarian" checked>
                        <label class="form-check-label" for="vegetarian">
                        Vegetarian
                        </label>
                     </div>
                     <div class="col-sm-6 form-check">
                        <input class="form-check-input" type="radio" name="food_cat" id="non_vegetarian" value="non_vegetarian">
                        <label class="form-check-label" for="non_vegetarian">
                        Non Vegetarian
                        </label>
                     </div>
                  </div>
               </div>
               <!-- end of radio buttons-->
               <div class="col-sm-4">
                  <div class="form-floating">
                     <input type="text" name="no_of_meals" class="form-control" id="no_of_meals" placeholder="No. Of Meals">
                     <label for="no_of_meals">How many meals do you have in a day ?</label>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="form-floating">
                     <input type="text" name="major_meal" class="form-control" id="major_meal" placeholder="Major Meal">
                     <label for="major_meal">Which is your major meal ?</label>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="form-floating">
                     <input type="text" name="glass_water" class="form-control" id="glass_water" placeholder="Your Name">
                     <label for="glass_water">Glasses/litres of water do you drink in a day ?</label>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="form-floating">
                     <input type="text" name="tea_coffee" class="form-control" id="tea_coffee" placeholder="Your Name">
                     <label for="tea_coffee">Number of cups of tea/coffee in a day ? </label>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="form-floating">
                     <input type="text" name="sugar" class="form-control" id="sugar" placeholder="Your Name">
                     <label for="sugar">With or without sugar ?</label>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="form-floating">
                     <input type="text" name="cooking_oil" class="form-control" id="cooking_oil" placeholder="Your Name">
                     <label for="cooking_oil">Which cooking oil do you use?</label>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="form-floating">
                     <input type="text" name="digestive_complaints" class="form-control" id="digestive_complaints" placeholder="Your Name">
                     <label for="digestive_complaints">Any digestive complaints? (acidity,gas,constipation)
                     </label>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="form-floating mb-3">
                     <select name="alcohol" class="form-select" id="alcohol" aria-label="State">
                        <option value="yes">Yes</option>
                        <option value="no" selected>No</option>
                     </select>
                     <label for="lastname">Do you drink alcohol ?</label>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="form-floating mb-3">
                     <select name="smoke" class="form-select" id="smoke" aria-label="State">
                        <option value="yes">Yes</option>
                        <option value="no" selected>No</option>
                     </select>
                     <label for="lastname">Do you smoke ??</label>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="form-floating mb-3">
                     <select name="how_active" class="form-select" id="how_active" aria-label="State">
                        <option value="active" selected>Active</option>
                        <option value="moderate">Moderate</option>
                        <option value="sedentary" >Sedentary</option>
                     </select>
                     <label for="lastname">How active are you ?</label>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="form-floating mb-3">
                     <select name="followed_dietplan" class="form-select" id="followed_dietplan" aria-label="State">
                        <option value="yes">Yes</option>
                        <option value="no" selected>No</option>
                     </select>
                     <label for="lastname">Did you followed any diet plan in the past ?</label>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="form-floating">
                     <input type="text" name="followed_dietplan_comment" class="form-control" id="followed_dietplan_comment" placeholder="Your Name">
                     <label for="lastname">If yes did you achieve any weight loss ?</label>
                  </div>
               </div>
               <!-- end of Food Habits and lifestyle-->
               <div class="subtitles">
                  <h6 class="card-title">Specific Food to Avoid : </h6>
               </div>
               <div class="col-sm-10" style="margin-left: 13px;margin-top: 0;">
                  <div class="row">
                     <div class="col-sm-3 form-check">
                        <input class="form-check-input" name="avoid_food[]" type="checkbox" id="Wheat" value="wheat">
                        <label class="form-check-label" for="wheat">
                        Wheat
                        </label>
                     </div>
                     <div class="col-sm-3 form-check">
                        <input class="form-check-input" name="avoid_food[]" type="checkbox" id="Meats" value="meats">
                        <label class="form-check-label" for="Meats">
                        Meats
                        </label>
                     </div>
                     <div class="col-sm-3 form-check">
                        <input class="form-check-input" name="avoid_food[]" type="checkbox" id="all_grains" value="all_grains">
                        <label class="form-check-label" for="all_grains">
                        All Grains
                        </label>
                     </div>
                     <div class="col-sm-3 form-check">
                        <input class="form-check-input" name="avoid_food[]" type="checkbox" id="eggs" value="eggs">
                        <label class="form-check-label" for="eggs">
                        Eggs
                        </label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-3 form-check">
                        <input class="form-check-input" name="avoid_food[]" type="checkbox" id="gluten" value="gluten">
                        <label class="form-check-label" for="gluten">
                        Gluten
                        </label>
                     </div>
                     <div class="col-sm-3 form-check">
                        <input class="form-check-input" name="avoid_food[]" type="checkbox" id="peanuts" value="peanuts">
                        <label class="form-check-label" for="peanuts">
                        Peanuts
                        </label>
                     </div>
                     <div class="col-sm-3 form-check">
                        <input class="form-check-input" name="avoid_food[]" type="checkbox" id="fish" value="fish">
                        <label class="form-check-label" for="fish">
                        Fish
                        </label>
                     </div>
                     <div class="col-sm-3 form-check">
                        <input class="form-check-input" name="avoid_food[]" type="checkbox" id="sugar" value="sugar">
                        <label class="form-check-label" for="sugar">
                        Sugar
                        </label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-3 form-check">
                        <input class="form-check-input" name="avoid_food[]" type="checkbox" id="specific_nuts" value="specific_nuts">
                        <label class="form-check-label" for="specific_nuts">
                        Specific Nuts
                        </label>
                     </div>
                     <div class="col-sm-3 form-check">
                        <input class="form-check-input" name="avoid_food[]" type="checkbox" id="specific_grains" value="specific_grains">
                        <label class="form-check-label" for="specific_grains">
                        Specific Grains
                        </label>
                     </div>
                     <div class="col-sm-3 form-check">
                        <input class="form-check-input" name="avoid_food[]" type="checkbox" id="specific_vegetables" value="specific_vegetables">
                        <label class="form-check-label" for="specific_vegetables">
                        Specific Vegetables
                        </label>
                     </div>
                     <div class="col-sm-3 form-check">
                        <input class="form-check-input" name="avoid_food[]" type="checkbox" id="specific_animal_milk_product" value="specific_animal_milk_product">
                        <label class="form-check-label" for="specific_animal_milk_product">
                        Specific Animal Milk Product
                        </label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-3 form-check">
                        <input class="form-check-input" name="avoid_food[]" type="checkbox" id="gridCheck1" value="">
                        <label class="form-check-label" for="gridCheck1">
                        All Legumes / Beans
                        </label>
                     </div>
                     <div class="col-sm-3 form-check">
                        <input class="form-check-input" name="avoid_food[]" type="checkbox" id="gridCheck2" value="">
                        <label class="form-check-label" for="gridCheck2">
                        All Animal Milk Products
                        </label>
                     </div>
                  </div>
               </div>
               <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
               </div>
            </form>
            <!-- End floating Labels Form -->
         </div>
      </div>
   </div>
</section>

<script>
$(document).ready(function() {
  function calculateBMI() {
      var weight = document.getElementById('weight').value;
      var height = document.getElementById('height').value/ 100;
      var category = document.getElementById('category');
      //var output = document.getElementById('output');
      //console.log('weight' + weight +'height'+height);
      //var height_sq= height * height;
      //console.log('height_sq' + height_sq);
      var bmi = weight / (height * height);
      var result = "";
      bmi = bmi.toFixed(2);
      
      if (bmi && bmi != Number.POSITIVE_INFINITY && !isNaN(bmi)) {
        document.getElementById('bmi').value=bmi;
      } else {
        document.getElementById('bmi').value='';
      }
      $('#bmi_result').find('span').remove();
      if (bmi < 18.5) {
        result = "Underweight";
        $("#bmi_result").append('<span class="badge bg-light text-dark"><i class="bi bi-star me-1"></i>' + result + '</span>');
      } else if (bmi > 25 && bmi <= 30) {
        result = "Overweight";
        $("#bmi_result").append('<span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>' + result + '</span>');
      } else if (bmi > 30) {
        result = "Obese";
        $("#bmi_result").append('<span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>' + result + '</span>');
      } else {
        result = "Normal";
        $("#bmi_result").append('<span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>' + result + '</span>');
      }
      category.value=result;
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