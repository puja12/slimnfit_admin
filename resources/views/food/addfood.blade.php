@extends('layouts.app')
@section('title','Add Food')
@section('content')
<div class="pagetitle">
  <h1>Foods : </h1>
  <div class="row">
    <div  class="col-sm-6">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">Foods</li>
          <li class="breadcrumb-item active">Add Food Item</li>
        </ol>
      </nav>
    </div>
    
  </div>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Food Item Details</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3">
                <table  id="dynamic_fooditems">
                  <tr>
                    <td width="32%" style="padding-right: 15px;">
                        <div class="form-floating">
                          <input type="text" class="form-control" name="item_name[]" id="floatingName" placeholder="Your Name">
                          <label for="floatingName">Food Item</label>
                        </div>
                    </td>
                    <td width="32%" style="padding-right: 15px;">
                      <div class="form-floating">
                          <input type="text" class="form-control" name="item_ingredients[]" id="floatingName" placeholder="Your Name">
                          <label for="floatingName">Ingredients</label>
                      </div>
                    </td>
                    <td>
                          <div class="form-floating mb-3">
                            <a href="#" class="btn btn-primary btn-sm plus" id="add" title="add fields"><i class="bi bi-plus-square"></i></a>
                        </div>
                    
                    </td>
                  </tr>
                </table>
               
                
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
                
                
              </form><!-- End floating Labels Form -->

            
          </div>

        </div>
      </div>
    </section>
    <script>
      $(document).ready(function(){  
        var i=1;  

        $('#add').click(function(){  
          console.log('Clicked');
          i++;  
          
          var html = '';
              html += '<tr id="row_'+i+'" class="dynamic-added">';
              html += '<td width="32%" style="padding-right: 15px;"><div class="form-floating"><input type="text" class="form-control" name="item_name[]" id="floatingName" placeholder="Your Name"><label for="floatingName">Food Item</label></div></td>';
              html += '<td width="32%" style="padding-right: 15px;"><div class="form-floating"><input type="text" class="form-control" name="item_ingredients[]" id="floatingName" placeholder="Your Name"><label for="floatingName">Ingredients</label></div></td>';
              html += '<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td>';
              html += '</tr';
              $('#dynamic_fooditems').append(html);
        });  
        $(document).on('click', '.btn_remove', function(){  
          var button_id = $(this).attr("id");   
          $('#row_'+button_id+'').remove();  
        });
      }); 
    </script>
    @endsection

    