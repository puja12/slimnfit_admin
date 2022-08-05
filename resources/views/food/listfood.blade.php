@extends('layouts.app')
@section('title','Food List')
@section('content')
    <div class="pagetitle">
      <h1>Foods : </h1>
      <div class="row">
        <div  class="col-sm-6">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item">Foods</li>
              <li class="breadcrumb-item active">List</li>
            </ol>
          </nav>
        </div>
        <div class="col-sm-6">
          <a href="{{route('addfood')}}">
            <button type="button" class="btn btn-primary">Add Food Item</button>
          </a>
        </div>
      </div>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
      <div class="card">
            <div class="card-body">
              <h5 class="card-title">Foods List (with ingredients if any)</h5>

              <!-- Table with stripped rows -->
              <table id="clienttb" class="table table-striped datatable">
                <thead>
                  <tr>
                    <th scope="col">#.</th>
                    <th scope="col">Food item</th>
                    <th scope="col">Ingredients</th>
                    <th scope="col">Action</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                @if(count($listings)>0)
                  @foreach($listings as $index =>$curr_item)
                    <tr data-href="#" style='cursor: pointer'>
                      <th scope="row">{{$index+1}}</th>
                      <td>{{$curr_item->name}}</td>
                      <td>{{$curr_item->ingredients}}</td>
                      <td>
                      <a href="#" class="btn btn-primary btn-sm" title="Edit Food Item"><i class="bi bi-pencil-square"></i></a>
                      <a href="#" class="btn btn-danger btn-sm" title="Delete Food Item"><i class="bi bi-trash"></i></a>
                      </td>
                      <td>Active</td>
                    </tr>
                    @endforeach
                    @else
                      No records found!!
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