@extends('layouts.app')
@section('title','Clients Profile')
@section('content')

    <div class="pagetitle">
      <h1>Client : {{$curr_client->first_name}} {{$curr_client->last_name}}</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Clients</li>
          <li class="breadcrumb-item active">Client Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->    
    <section class="section biodata">
      <div class="row">
        <div class="col-lg-8">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Profile Details</h5>
                  <table class="table">
                    <tbody>
                      <tr>
                        <th width="30%">Date of Birth</th>
                        <td width="30%">{{date('d-m-Y', strtotime($curr_client->date_of_birth))}}</td>
                        <th width="15%">Weight</th>
                        <td width="30%">{{$curr_client->weight}}</td>
                      </tr>
                      <tr>
                        <th>Age</th>
                        <td>{{$curr_client->age}} Years</td>
                        <th>Height</th>
                        <td>{{$curr_client->height}}</td>
                      </tr>
                      <tr>
                        <th>Phone No.</th>
                        <td>{{$curr_client->phone}}</td>
                        <th>BMI</th>
                        <td></td>
                      </tr>
                      <tr>
                        <th>Address:</th>
                        <td>&nbsp;</td>
                        <th></th>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <!--<th>Address<br/>City<br/>State<br/>Pincode</th>-->
                        <td colspan="2">
                          @if($curr_client->address != '')
                            @foreach(explode('#', $curr_client->address) as $info) 
                              {{$info}}<br/>
                            @endforeach
                          @else
                            N.A.
                          @endif
                        </td>
                        <th></th>
                        <td></td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
              
              
          </div>

          <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Diet Plans</h5>
                  <table class="table">
                    <tbody>
                      <tr>
                        <th width="2%">No.</th>
                        <th width="20%">Date</th>
                        <th width="48%">Plan Name</th>
                        <th width="30%">Status</th>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                      </tr>
                      <tr>
                      <td>2</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                      </tr>
                      <tr>
                      <td>3</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                      </tr>
                      <tr>
                      <td>4</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
      </div>

      <div class="row">
      <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              
              <h5 class="card-title">Food Habits & Life Style</h5>
              <table class="table table-borderless">
                    <tbody>
                      <tr>
                        <th>Meal Type : </th> <td>{{$curr_client->diet_type}}</td>
                      </tr>
                      <tr>
                        <th>No. of Meals per Day : </th> <td>{{$curr_client->no_of_meals}}</td>
                      </tr>
                      <tr>
                        <th>Major Meal :</th> <td> {{$curr_client->major_meal}}</td>
                        </tr>
                      <tr>
                        <th>Water in a day (glasses or litres) :</th> <td> {{$curr_client->glass_water}}</td>
                        </tr>
                      <tr>
                        <th>No. of cups of tea/coffee in a day (With or without sugar ):</th> <td>{{$curr_client->tea_coffee}} {{$curr_client->sugar}}</td>
                        </tr>
                      <tr>
                        <th>Cooking oil used :</th> <td>{{$curr_client->cooking_oil}}</td>
                        </tr>
                      <tr>
                        <th>Digestive Complaints :</th> <td>{{$curr_client->digestive_complaints}}</td>
                        </tr>
                      <tr>
                        <th>Eat outside food :</th> <td>{{$curr_client->eat_out}}</td>
                        </tr>
                      <tr>
                        <th>Consume alcohol :</th> <td>{{$curr_client->alcohol}}</td>
                        </tr>
                      <tr>
                        <th>Smoke :</th> <td>{{$curr_client->smoke}}</td>
                        </tr>
                      <tr>
                        <th>Active are you :</th> <td>{{$curr_client->how_active}}</td>
                        </tr>
                      <tr>
                        <th>Followed any diet plan in the past :</th> <td>{{$curr_client->followed_dietplan}} {{$curr_client->followed_dietplan_comment}}</td>
                      </tr>
                      
                      <tr>
                        <th>Foods to Avoid :</th> <td>{{$curr_client->avoid_food}}</td>
                      </tr>
                      <tr>
                        <th>Diet recall :</th> <td> {{$curr_client->diet_recall}}</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
          </div>
      </div>

      
        

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
              <h5 class="card-title">Medical History</h5>
              <p>{{$curr_client->medical_history}}</p>
          </div>
        </div>
        <!-- family members -->
        <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Fitness Tracking <!-- <br /><span>Click on member to EDIT Details</span>--></h5>
                  <table class="table">
                    <tbody>
                      <tr>
                        <th width="30%">Date</th>
                        <th width="15%">Weight (Kgs)</th>
                        <th width="15%">Height (cm)</th>
                        <th width="35%">BMI</th>
                      </tr>
                      <tr>
                        <td>20-01-2022</td>
                        <td>67</td>
                        <td>162</td>
                        <td>25.53 Overweight</td>
                      </tr>
                      <tr>
                      <td>XXXX</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                      </tr>
                      <tr>
                      <td>XXXX</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                      </tr>
                      <tr>
                      <td>XXXX</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
              </div>
      </div>
    </section>

@endsection    