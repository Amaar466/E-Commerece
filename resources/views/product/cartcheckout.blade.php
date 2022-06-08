@extends('layout.addcart')

@section('content')
<style>
    .checkout-form label{
        font-size:12px;
        font-weight:700
    }
    .checkout-form input{
        font-size:17px;
        padding:5px;
        font-weight:400px;
    }
</style>
              <div class="container mt-4">
                  <form action="{{url('/place-order')}}" method="post">
                    @csrf
                  <div class="row">
                      <div class="col-md-7">
                          <div class="card">
                              <div class="card-body">
                                  <h4>Basic Detail</h4>
                                  <hr>
                                  <div class="row checkout-form">
                                      <div class="col-md-6">
                                          <label for="FirstName">First name</label>
                                          <input type="text" class="form-control" name="fname" placeholder="Enter First Name">
                                      </div>
                                      <div class="col-md-6">
                                          <label for="LastName">Last name</label>
                                          <input type="text" class="form-control" name="lname" placeholder="Enter last Name">
                                      </div>
                                      <div class="col-md-6 mt-2">
                                          <label for="Email">Email</label>
                                          <input type="text" class="form-control" name="email" placeholder="Enter Your Email">
                                      </div>
                                      <div class="col-md-6 mt-2">
                                          <label for="Phone">Phone</label>
                                          <input type="text" class="form-control" name="phone_number" placeholder="Enter your Phone ">
                                      </div>
                                      <div class="col-md-6 mt-2">
                                          <label for="Address">Address</label>
                                          <input type="text" class="form-control" name="address" placeholder="Enter your Phone ">
                                      </div>
                                      <div class="col-md-6 mt-2">
                                          <label for="City">City</label>
                                          <input type="text" class="form-control" name="city" placeholder="Enter your City ">
                                      </div>
                                      <div class="col-md-6 mt-2">
                                          <label for="State">State</label>
                                          <input type="text" class="form-control" name="state"  placeholder="Enter your State ">
                                      </div>
                                      <div class="col-md-6 mt-2">
                                          <label for="Country">Country</label>
                                          <input type="text" class="form-control" name="country" placeholder="Enter your Country ">
                                      </div>
                                      <div class="col-md-6 mt-2">
                                          <label for="PinCOde">PinCode</label>
                                          <input type="text" class="form-control" name="post_code" placeholder="Enter your PinCode ">
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-5">
                          <div class="card">
                              <div class="card-body">
                                  <h5>Order Detail</h5>
                                  <hr>
                                  <div class="row">
                                      <table class="table ">
                                          <thead>
                                              <tr>
                                                  <th>Name</th>
                                                  <th>Quantity</th>
                                                  <th>Price</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                          @foreach($cart as $finals)
                                                <tr>                                           
                                                    <td>{{$finals->Product->product_slug}}</td>
                                                    <td>{{$finals->Product->quantity}}</td>
                                                    <td>{{$finals->Product->price}}</td>
                                                    <td></td>
                                                </tr>
                                                @endforeach
                                          </tbody>
                                          
                                    
                                        </table>
                                 
                                  </div>
                                  <hr>
                                  <input type="submit" value="Place order" class="btn btn-primary w-100">
                              </div>
                          </div>
                      </div>
                  </div>
                  </form>
              </div>  
      
@endsection