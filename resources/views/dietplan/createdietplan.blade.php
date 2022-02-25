@extends('layouts.app')
@section('title','Create Diet Plan')
@section('content')
<div class="pagetitle">
      <h1>Clients : </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Clients</li>
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
              <form class="row g-3">
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
                    <th scope="col" width="15%">Schedule</th>
                    <th scope="col" width="30%">Food</th>
                    <th scope="col" width="15%">Quantity</th>
                    <th scope="col" width="35%">Notes</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Early Morning</td>
                    <td>
                    
                    <select class="select2" multiple="multiple" data-placeholder="Food Item" style="width: 100%;">
                      <option>Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
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
                    <th scope="row">2</th>
                    <td>Breakfast</td>
                    <td>
                    
                    <select class="select2" multiple="multiple" data-placeholder="Food Item" style="width: 100%;">
                      <option>Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
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
                      <option>Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
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
                      <option>Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
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
                      <option>Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
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