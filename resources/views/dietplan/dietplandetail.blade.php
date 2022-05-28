@extends('layouts.app')
@section('title','Diet Plan Detail')
@section('content')
    <div class="pagetitle">
      <h1>Clients : </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">DietPlans</li>
          <li class="breadcrumb-item active">Plan Detail</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Plan Name</h5>
              <!-- Bordered Table -->
              <?//print_r($dietplan_details);exit;?>
              @if(count($dietplan_details)==0)
                <p>No plans created</p>
              @else
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col" width="5%">#</th>
                    <th scope="col" width="15%">Schedule</th>
                    <th scope="col" width="30%">Meal</th>
                    <th scope="col" width="20%">Quantity</th>
                    <th scope="col" width="30%">Comments / Suggestions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($dietplan_details as  $index=>$curr_detail)
                  <tr>
                    <th scope="row">{{$index+1}}</th>
                    <td>{{$curr_detail->mealtime}}</td>
                    @php $foods = explode('#' ,$curr_detail->foods);
                       $qty = explode('#' ,$curr_detail->qty);
                       $comments = explode('#' ,$curr_detail->comments);
                    @endphp
                    <td>
                       @foreach($foods as $cur_food)
                          @if (str_contains($cur_food, '|'))
                            @php $option_food = explode('|' ,$cur_food);@endphp
                              @foreach($option_food as $food)
                                or {{$food}}<br/>
                              @endforeach
                          @else
                            {{$cur_food}}<br/>
                          @endif
                       @endforeach
                    </td>
                    <td> @foreach($qty as $cur_qty)
                        {{$cur_qty}}<br/>
                       @endforeach</td>
                    <td>

                      @foreach($comments as $cur_comment)
                        {{$cur_comment}}<br/>
                       @endforeach
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
              <!-- End Bordered Table -->
              @endif
            </div>
          </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-header">Note:</div>
                <div class="card-body">
                * once in 2 weeks eating out is advisable <br/>
                * Avoid taking sugar, fried , bakery products in day to day consumption<br/>
                * maintain food diary to keep a track of diet 
                </div>
            </div>
        </div>
    </section>

@endsection