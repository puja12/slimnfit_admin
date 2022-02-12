@extends('layouts.app')
@section('title','Clients Add')
@section('content')

    <div class="pagetitle">
      <h1>Family Details</h1>
      <!--<nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Search Vastipatrak</li>
        </ol>
      </nav>-->
    </div><!-- End Page Title -->    
    <section class="section biodata">
      <div class="row">
              <!-- Head of the family -->
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Head of the Family</h5>
                  <table class="table">
                    <tbody>
                      <tr>
                        <th width="18%">Family ID</th>
                        <td width="32%">XXXX</td>
                        <th width="18%">Vastipatrak No.</th>
                        <td width="32%">XXXX</td>
                      </tr>
                      <tr>
                        <th>Village</th>
                        <td>XXXX</td>
                        <th>Gotra</th>
                        <td>XXXX</td>
                      </tr>
                      <tr>
                        <th>Residencial No.</th>
                        <td>XXXX</td>
                        <th>Voting Center</th>
                        <td>XXXX</td>
                      </tr>
                      <tr>
                        <th>Permenent Address:</th>
                        <td>&nbsp;</td>
                        <th>Alternate Address:</th>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <th>Address<br/>City<br/>State<br/>Pincode</th>
                        <td>XXXXXXXXXX<br/>XXXX<br/>XXXXX<br/>XXXXXXXX</td>
                        <th>Address<br/>City<br/>State<br/>Pincode</th>
                        <td>XXXXXXXXXX<br/>XXXX<br/>XXXXX<br/>XXXXXXXX</td>
                      </tr>
                      <tr>
                        <th>2 Wheelers</th>
                        <td>XXXX</td>
                        <th>4 Wheelers</th>
                        <td>XXXX</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              
              <!-- family members -->
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Family Members <br /><span>Click on member to EDIT Details</span></h5>
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <td><p>Photo</p><p>Female, Married<br />Mobile: XXXXXXXXXX<br />Email: XXXX@XXXX.com</p></td>
                        <td>Renukaben Arvindbhai Shah<br />Mother<br />1950-08-29<br />Skills<br />Sports Interest<br />Abroad</td>
                        <td>Profession<br />Designation<br />Office Name<br />Office Address<br />Business Field / Stream</td>
                      </tr>
                      <tr>
                        <td><p>Photo</p><p>Female, Married<br />Mobile: XXXXXXXXXX<br />Email: XXXX@XXXX.com</p></td>
                        <td>Renukaben Arvindbhai Shah<br />Mother<br />1950-08-29<br />Skills<br />Sports Interest<br />Abroad</td>
                        <td>Profession<br />Designation<br />Office Name<br />Office Address<br />Business Field / Stream</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
      </div>
    </section>

@endsection    