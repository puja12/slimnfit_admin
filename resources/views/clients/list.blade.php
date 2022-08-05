@extends('layouts.app')
@section('title','List of Clients')
@section('content')
<!--{{ print_r($clients) }}-->
    <div class="pagetitle">
      <h1>Clients : </h1>
      <div class="row">
        <div  class="col-sm-6">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item">Clients</li>
              <li class="breadcrumb-item active">List</li>
            </ol>
          </nav>
        </div>
        <div class="col-sm-6">
          <a href="{{route('addclients')}}">
            <button type="button" class="btn btn-primary">Add Client</button>
          </a>
        </div>
      </div>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
      <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Table with stripped rows</h5>

              Table with stripped rows -->
              <table id="clienttb" class="table table-striped datatable">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Date Joined</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">View/Edit</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                @if(count($clients)>0)
                  @foreach($clients as $curr_client)
                    <tr data-href="{{route('showclient',$curr_client->id)}}" style='cursor: pointer'>
                      <th scope="row">{{$curr_client->id}}</th>
                      <td>{{date('d-m-Y', strtotime($curr_client->created_at));}}</td>
                      <td>{{$curr_client->first_name}} {{$curr_client->last_name}}</td>
                      <td>{{$curr_client->email}}</td>
                      <td>{{$curr_client->age}}</td>
                      <td><i class="bi bi-eye-fill"></i> View</td>
                      <td>Active</td>
                    </tr>
                    @endforeach
                    @else
                      I don't have any records!
                    @endif
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
              <script>
                           $(document).ready(function() {
                             
							   $('#clienttb tbody').on('click','tr',function() {
                                 window.document.location = $(this).data("href");
							  });
                              
                           });
                        
                        </script>
            </div>
          </div>
      </div>
    </section>

@endsection