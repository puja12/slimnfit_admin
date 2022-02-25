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
                  <tr>
                    <th scope="row">1</th>
                    <td>Early Morning</td>
                    <td>Methi seeds soaked overnight
                        <br/>almonds <br/> walnuts
                    </td>
                    <td>1 tbsp <br/>4 nos.<br/>3 nos.</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Breakfast</td>
                    <td>
                        Tea + <br/>
                        Oats chilla or upma <br/>
                        OR Brown bread sandwich <br/>
                        
                        OR Besan Chilla<br/>
                        OR Poha

                    </td>
                    <td>
                        1cup<br/>
                        1 bowl- 150 gm<br/>
                        2 nos<br/>

                        2 nos<br/>
                        1 bowl- 150 gm<br/>
                    </td>
                    <td>( you can use mutigrain bread sometime)</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Mid - Morning</td>
                    <td>
                        Fruit- any seasonal<br/>
                        Multigrain chivada
                    </td>
                    <td>1 no<br/>
                        handful
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Lunch</td>
                    <td>
                        2 wheat rotis added with oats / bran <br/>
                        sabji<br/>
                        salad<br/><br/>
                        curd<br/>
                        or buttermilk
                    </td>
                    <td>
                        ratio should be 3:1<br/>
                        1 bowl with less oil<br/>
                        1 cucumber+ 1 tomato+ 1/2 carrot<br/>
                        1/2 bowl<br/>
                        1 glass thin
                    </td>
                    <td>
                        you can apply 1/2 tsp of ghee not more than palm size

                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Evening snacks</td>
                    <td>
                    stir fry veggies : bell peppers+ baby corn+cherry tomato+onion<br/>
                    OR Mix fruit plate<br/>
                    OR Makhana<br/>
                    tea

                    </td>
                    <td>
                    1 plate <br/><br/>
                    1 plate <br/>
                    1/2 bowl <br/>
                    1cup

                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Before  dinner</td>
                    <td>chia seeds</td>
                    <td>1/2 tsp</td>
                    <td>soak for 15-20 minuts. Drink water along with the seeds befor half an hour prior to dinner</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>Dinner</td>
                    <td>
                        2 wheat rotis added with oats / bran <br/>
                        sabji<br/>
                        salad<br/>
                        Dal
                    </td>
                    <td>
                        ratio should be 3:1<br/>
                        1 bowl with less oil<br/>
                        1 bowl<br/>
                        1 bowl
                    </td>
                    <td>
                        you can apply 1/2 tsp of ghee not more than palm size
                        <br/>
                        1 cucumber+ 1 tomato+ 1/2 carrot
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- End Bordered Table -->

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