@extends('layouts.app')
@section('title','Clients Add')
@section('content')

    <div class="pagetitle">
      <h1>Client : Puja Prabhu</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Clients</li>
          <li class="breadcrumb-item active">Client Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->    
    <section class="section biodata">
      <div class="row">
        <div class="col-lg-8">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Personal Details</h5>
                  <table class="table">
                    <tbody>
                      <tr>
                        <th width="30%">Date of Birth</th>
                        <td width="30%">20</td>
                        <th width="15%">Weight</th>
                        <td width="30%">XXXX</td>
                      </tr>
                      <tr>
                        <th>Age</th>
                        <td>XXXX</td>
                        <th>Height</th>
                        <td>XXXX</td>
                      </tr>
                      <tr>
                        <th>Phone No.</th>
                        <td>XXXX</td>
                        <th>BMI</th>
                        <td>XXXX</td>
                      </tr>
                      <tr>
                        <th>Address:</th>
                        <td>&nbsp;</td>
                        <th></th>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <th>Address<br/>City<br/>State<br/>Pincode</th>
                        <td>XXXXXXXXXX<br/>XXXX<br/>XXXXX<br/>XXXXXXXX</td>
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
      <div class="col-lg-12">
        <!-- family members -->
        <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Fitness Tracking <!-- <br /><span>Click on member to EDIT Details</span>--></h5>
                  <table class="table">
                    <tbody>
                      <tr>
                        <th width="5%">Date</th>
                        <th width="30%">Weight (Kgs)</th>
                        <th width="30%">Height (m)</th>
                        <th width="30%">BMI</th>
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