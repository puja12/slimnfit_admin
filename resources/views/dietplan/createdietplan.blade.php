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
              <form class="row g-3" method="post" action="">
              <div class="row" style="margin-bottom: 50px;">
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Diet Plan Name">
                    <label for="floatingName">Diet Plan Name</label>
                  </div>
                </div>
              </div>

              <div class="row">
              <!-- Bordered Table -->
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col" width="5%">#</th>
                    <th scope="col" width="10%">Schedule</th>
                    <th scope="col" width="30%">Food</th>
                    <th scope="col" width="15%">Quantity</th>
                    <th scope="col" width="15%">Units</th>
                    <th scope="col" width="25%">Notes</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Early Morning</td>
                    <td>
                    
                    <select class="select2" multiple="multiple" name="food_item" data-placeholder="Food Item" style="width: 100%;">
                      <option>Methi Seeds</option>
                      <option>Almonds</option>
                      <option>Walnuts</option>
                      <option>tea</option>
                      <option>Oats Chilla</option>
                      <option>upma</option>
                      <option>Brown Bread Sandwich</option>
                      <option>Besan Chilla</option>
                    </select>
              
                    </td>
                    <td>
                    <select class="select2" multiple="multiple" name="per_item_qty" data-placeholder="Qty per Item" style="width: 100%;">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                    </select>
                    </td>
                    <td>
                    <select class="select2" multiple="multiple" name="food_unit" data-placeholder="Units" style="width: 100%;">
                      <option>cup</option>
                      <option>cups</option>
                      <option>cup sliced</option>
                      <option>bowl</option>
                      <option>handful</option>
                      <option>nos.</option>
                      <option>large</option>
                      <option>small</option>
                    </select>
                    </td>
                    <td>
                    <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 70px;"></textarea>
                      
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Breakfast</td>
                    <td>
                    
                    <select class="select2" multiple="multiple" data-placeholder="Food Item" style="width: 100%;">
                      <option>Methi Seeds</option>
                      <option>Almonds</option>
                      <option>Walnuts</option>
                      <option>tea</option>
                      <option>Oats Chilla</option>
                      <option>upma</option>
                      <option>Brown Bread Sandwich</option>
                      <option>Besan Chilla</option>
                    </select>
              
                    </td>
                    <td>
                    <select class="select2" multiple="multiple" data-placeholder="Qty per Item" style="width: 100%;">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                    </select>
                    </td>
                    <td>
                    <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 70px;"></textarea>
                      
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Lunch</td>
                    <td>
                    
                    <select class="select2" multiple="multiple" data-placeholder="Food Item" style="width: 100%;">
                      <option>Methi Seeds</option>
                      <option>Almonds</option>
                      <option>Walnuts</option>
                      <option>tea</option>
                      <option>Oats Chilla</option>
                      <option>upma</option>
                      <option>Brown Bread Sandwich</option>
                      <option>Besan Chilla</option>
                    </select>
              
                    </td>
                    <td>
                    <select class="select2" multiple="multiple" data-placeholder="Qty per Item" style="width: 100%;">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                    </select>
                    </td>
                    <td>
                    <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 70px;"></textarea>
                      
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Evening Snacks</td>
                    <td>
                    
                    <select class="select2" multiple="multiple" data-placeholder="Food Item" style="width: 100%;">
                      <option>Methi Seeds</option>
                      <option>Almonds</option>
                      <option>Walnuts</option>
                      <option>tea</option>
                      <option>Oats Chilla</option>
                      <option>upma</option>
                      <option>Brown Bread Sandwich</option>
                      <option>Besan Chilla</option>
                    </select>
              
                    </td>
                    <td>
                    <select class="select2" multiple="multiple" data-placeholder="Qty per Item" style="width: 100%;">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                    </select>
                    </td>
                    <td>
                    <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 70px;"></textarea>
                      
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Dinner</td>
                    <td>
                    
                    <select class="select2" multiple="multiple" data-placeholder="Food Item" style="width: 100%;">
                      <option>Methi Seeds</option>
                      <option>Almonds</option>
                      <option>Walnuts</option>
                      <option>tea</option>
                      <option>Oats Chilla</option>
                      <option>upma</option>
                      <option>Brown Bread Sandwich</option>
                      <option>Besan Chilla</option>
                    </select>
              
                    </td>
                    <td>
                    <select class="select2" multiple="multiple" data-placeholder="Qty per Item" style="width: 100%;">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                    </select>
                    </td>
                    <td>
                    <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 70px;"></textarea>
                      
                    </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- End Bordered Table -->
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

  