@extends('layouts.app')
@section('title','List of Diet Plans')
@section('content')
    <div class="pagetitle">
      <h1>Diet Plans : </h1>
      <div class="row">
        <div  class="col-sm-6">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item">Diet Plans</li>
              <li class="breadcrumb-item active">List</li>
            </ol>
          </nav>
        </div>
        <div class="col-sm-6">
          <a href="{{route('createdietplan')}}">
            <button type="button" class="btn btn-primary">Add Diet Plan</button>
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
                    <th scope="col">Date</th>
                    <th scope="col">Name</th>
                    <th scope="col">Client</th>
                    <th scope="col">Copy Meal</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @if(count($diets)>0)
                  @foreach($diets as $curr_client)
                    <tr data-href="{{route('viewdietplan',$curr_client->id)}}" style='cursor: pointer'>
                      <th scope="row">{{$curr_client->id}}</th>
                      <td>{{date('d-m-Y', strtotime($curr_client->date));}}</td>
                      <td>{{$curr_client->plan_name}}</td>
                      <td>{{$curr_client->client_id}}</td>
                      
                      <td><i class="bi bi-files"></i>Copy Diet</td>
                      <td>
                      <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-eye-fill"></i>  </a>
                      <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-plus-square"></i></a>
                      <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                      </td>
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