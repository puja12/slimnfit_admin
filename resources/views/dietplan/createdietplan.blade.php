@extends('layouts.app')
@section('title','Create Diet Plan')
@section('content')
<div class="pagetitle">
      <h1>Diet Plan : </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Diet Plan</li>
          <li class="breadcrumb-item active">Add</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Diet Plan</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" method="post" action="{{ route('storedietplan')}}">
                @csrf
              <div class="row" style="margin-bottom: 50px;">
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="plan_name" id="floatingName" placeholder="Diet Plan Name">
                    <label for="floatingName">Diet Plan Name</label>
                  </div>
                </div>
              </div>

              <div class="row">
                @foreach($mealtime as $key => $schedule)
                <h5 >{{$schedule->slot}}</h5>
                <input type="hidden" class="form-control" id="mealtime_{{$schedule->seq_no}}" name="mealtime_{{$schedule->seq_no}}" value="{{$schedule->slot}}">
                <!-- Bordered Table -->
                @php 
                  $slot = preg_replace('/\s+/', '', strtolower($schedule->seq_no));
                @endphp
                <table class="table table-bordered" id="dynamic_diet_{{$schedule->seq_no}}">
                  <thead>
                    <tr>
                      <th scope="col" width="30%">Food</th>
                      <th scope="col" width="15%">Quantity</th>
                      <th scope="col" width="15%">Units</th>
                      <th scope="col" width="30%">Notes</th>
                      <th scope="col" width="10%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <select class="form-select" name="food_item_{{$schedule->seq_no}}[]"  data-placeholder="Food Item" style="width: 100%;">
                          @foreach($foods as $key => $food)
                          <option value="{{$food->name}}"> {{$food->name}}</option>
                          @endforeach
                        </select>
                      </td>
                      <td>
                      <select class="form-select" name="per_item_qty_{{$schedule->seq_no}}[]" data-placeholder="Qty per Item" style="width: 100%;">
                        @for ($i = 1; $i <= 10; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
    
                      </select>
                      </td>
                      <td>
                      <select class="form-select" name="food_unit_{{$schedule->seq_no}}[]" data-placeholder="Units" style="width: 100%;">
                        @foreach($units as $key => $unit)
                          <option value="{{$unit->unit_name}}"> {{$unit->unit_name}}</option>
                          @endforeach
                      </select>
                      </td>
                      <td>
                        <div class="form-floating mb-3">
                          <textarea class="form-control" name="comments_{{$schedule->seq_no}}[]" placeholder="Leave a comment here" id="floatingTextarea" style="height: 30px;"></textarea>
                        </div>
                      </td>
                      <td>
                        <div class="form-floating mb-3">
                          <a href="#" class="btn btn-primary btn-sm plus" id="add_{{$schedule->seq_no}}}" title="add fields"><i class="bi bi-plus-square"></i></a>
                          <!--<a href="#" class="btn btn-danger btn-sm minus" title="remove"><i class="bi bi-file-minus"></i></a>-->
                        </div>
                        </td>
                    </tr>
                  </tbody>
                </table>
                <!-- End Bordered Table -->

                <script>
                  $(document).ready(function(){  
                    var i=1;  
                    var foodunits = @json($units);

                    $('#add_{!!$slot!!}').click(function(){  
                      console.log('Clicked');return false;
                      i++;  

                      var options_fooditem=options_foodunits=options_qty="";
                      $.each({!!$foods!!}, function(key, value) {
                          options_fooditem+="<option value='"+value.name+"'>"+value.name+"</option>";
                          //$('#food_item_{!!$slot!!}').append('<option value="' + value.name + '">' + value.name +'</option>');
                      });

                      //var options_foodunits="";
                      $.each({!!$units!!}, function(key, value) {
                          options_foodunits+="<option value='"+value.unit_name+"'>"+value.unit_name+"</option>";
                      });

                      //var options_qty="";
                      for (var i = 1; i < 10; i++) {
                          options_qty+="<option value='"+i+"'>"+i+"</option>";
                      };
                      
                      var html = '';
                          html += '<tr id="row_{!!$slot!!}'+i+'" class="dynamic-added">';
                          html += '<td><select class="form-select" name="food_item_{!!$slot!!}[]" id="food_item_{!!$slot!!}" data-placeholder="Food Item" style="width: 100%;">';
                          html += options_fooditem; 
                          html += '</select></td>';
                          html += '<td><select class="form-select" name="per_item_qty_{!!$slot!!}[]" id="per_item_qty_{!!$slot!!}" data-placeholder="Per item Qty" style="width: 100%;">';
                          html += options_qty; 
                          html += '</select></td>';
                          html += '<td><select class="form-select" name="food_unit_{!!$slot!!}[]" id="food_unit_{!!$slot!!}" data-placeholder="Food Unit" style="width: 100%;">';
                          html += options_foodunits; 
                          html += '</select></td>';
                          html += '<td><div class="form-floating mb-3"><textarea class="form-control" name="comments[]" placeholder="Leave a comment here" id="floatingTextarea" style="height: 30px;"></textarea></div></td>';
                          html += '<td><button type="button" name="remove" id="{!!$slot!!}'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>';
                          $('#dynamic_diet_{!!$slot!!}').append(html);
                    });  
                    $(document).on('click', '.btn_remove', function(){  
                      var button_id = $(this).attr("id");   
                      $('#row_'+button_id+'').remove();  
                    });
                  }); 
                </script>
                @endforeach
                
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
    
  