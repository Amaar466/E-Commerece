@extends('layout.addcart')

@section('content')

<div class="py-3 mb-4 shadow-sm bg-dark border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('/') }}">
                Home
            </a>/
            <a href="#">
            Cart 
            </a>
        </h6>
    </div>
</div>
<?php
$total = 0;
?>
                    <div class="container my-5">
                        <h2 class="text-dark text-center">Cart List</h2>
        
        <div class="card shadow">
            <div class="row">
            <div class="col-2">
                <h2>Product</h2>
            </div>
            <div class="col-2">
                <h2>Name</h2>
            </div>
            <div class="col-2">
                <h2>Price</h2>
            </div>
            <div class="col-6">
                <h2>Quantity</h2>
            </div>
            
            </div>
                        @foreach($cart as $finals)
                    <div class="row product_data">
                        <div class="col-md-2 my-auto">
                        <img  src="{{asset('assets/uploads/productimage/'.$finals->Product->photo)}}" style="width:80px;margin-top:10px;">
                        </div>
                        <div class="col-md-2 my-auto">

                            <h4>{{ $finals->Product->product_slug }}</h4>
                        </div>
                        <div class="col-md-4 my-auto">
                            <h6>{{ $finals->Product->price }}</h6>
                        </div>
                        <div class="col-md-2 my-auto">
                            
                            <!-- @if($finals->Product->quantity >= 0) -->
                            
                            <div class="input-group w-75 " style="margin-left:-180px;">
          <span class="input-group-btn">
              <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[2]">
                <span class="glyphicon glyphicon-minus">-</span>
              </button>
          </span>
          <input type="text" name="quant[2]" value="{{$finals->Product->quantity}}" class="form-control input-number" value="10" min="1" max="100">
          <span class="input-group-btn">
              <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
                  <span class="glyphicon glyphicon-plus">+</span>
              </button>
          </span>
      </div>
	
                                
                                @else
                                 <h6 class="text-danger">Out of Stock</h6>
                            @endif
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-danger mt-4 delete-cart-item" style="margin-top:20px;margin-left:-20px;"><i class="fa fa-trash"></i> remove</button>
                        </div>
            </div>
            <?php
$total  += $finals->Product->price * $finals->Product->quantity;
?>
 @endforeach
 <div class="card-footer">
     
                <h6>Total Price ::{{$total}}
                    <a href="{{url('/checkout')}}" class="btn btn-outline-success float-end">Proceed to Checkout</a>
                </h6>
            </div>
</div>
            <div class="card-body text-center">
                <h2 class="mt-3">Your <i class="fa fa-shopping-cart"></i> Cart is Empty</h2>
                <a href="{{url('/')}}" class="btn btn-outline-primary float-end">Continue Shoping</a>
            </div>
        </div>
    </div>
    @endsection