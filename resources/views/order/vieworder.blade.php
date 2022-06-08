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
                 
                   
                  <div class="row">
                      <div class="col-md-7">
                          <div class="card">
                              <div class="card-body">
                                  <h4>Shipping Detail</h4>
                                  <hr>
                                  <div class="row checkout-form">
                                      <div class="col-md-6">
                                          <label for="FirstName">First name</label>
                                          <!-- <input type="text" class="form-control" name="fname" placeholder="Enter First Name"> -->
                                      <div class="border">{{$orders->fname}}</div>
                                        </div>
                                      <div class="col-md-6">
                                          <label for="LastName">Last name</label>
                                          <!-- <input type="text" class="form-control" name="lname" placeholder="Enter last Name"> -->
                                          <div class="border">{{$orders->lname}}</div>
                                        </div>
                                      <div class="col-md-6 mt-2">
                                          <label for="Email">Email</label>
                                          <!-- <input type="text" class="form-control" name="email" placeholder="Enter Your Email"> -->
                                          <div class="border">{{$orders->email}}</div>
                                        </div>
                                      <div class="col-md-6 mt-2">
                                          <label for="Phone">Phone</label>
                                          <!-- <input type="text" class="form-control" name="phone_number" placeholder="Enter your Phone "> -->
                                          <div class="border">{{$orders->phone_number}}</div>
                                        </div>
                                      <div class="col-md-6 mt-2">
                                          <label for="Address">Address</label>
                                          <!-- <input type="text" class="form-control" name="address" placeholder="Enter your Phone "> -->
                                          <div class="border">{{$orders->address}}</div>
                                        </div>
                                       <div class="col-md-6 mt-2">
                                          <label for="City">City</label>
                                          <!-- <input type="text" class="form-control" name="city" placeholder="Enter your City "> -->
                                          <div class="border">{{$orders->city}}</div>
                                        </div>
                                      <div class="col-md-6 mt-2">
                                          <label for="State">State</label>
                                          <!-- <input type="text" class="form-control" name="state"  placeholder="Enter your State "> -->
                                          <div class="border">{{$orders->state}}</div>
                                        </div>
                                      <div class="col-md-6 mt-2">
                                          <label for="Country">Country</label>
                                          <!-- <input type="text" class="form-control" name="country" placeholder="Enter your Country "> -->
                                          <div class="border">{{$orders->country}}</div>
                                        </div>
                                      <div class="col-md-6 mt-2">
                                          <label for="PinCOde">PinCode</label>
                                          <!-- <input type="text" class="form-control" name="post_code" placeholder="Enter your PinCode "> -->
                                          <div class="border">{{$orders->post_code}}</div>
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
                                         
                                                <tr>                                           
                                                    <td>{{$product->product_slug}}</td>
                                                    <td>{{$product->quantity}}</td>
                                                    <td>{{$product->price}}</td>
                                                    <td></td>
                                                </tr>
                                                
                                          </tbody>
                                        </table>
                                        <h4 class="px-2">Grand Total::<span class="float-end">{{$orders->total_price}}</span></h4>
                                  <label for="">Order Status</label>
                                  <form action="{{url('/admin/update-orders/'.$orders->id)}}" method="post">
                                    @csrf
                                  <select name="order_status" value="{{$product->status}}" >
                                      <option value="{{$orders->status =='0'? 'selected':''}}">Pending</option>
                                      <option value="{{$orders->status =='1'? 'selected':''}}">Complete</option>
                                  </select>
                                  <input type="submit" class="btn btn-success">
                                  </form>
                                    </div>
                                  <hr>
                                  <!-- <input type="submit" value="Place order" class="btn btn-primary w-100">-->
                              </div>
                          </div>
                      </div> 
                  </div>
                  
              </div>  
      
@endsection