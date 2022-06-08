@extends('layout.front')

@section('content')

<div class="row"> 
@foreach($product as $finals)
    <div class="col-4">
<div class="card" style="width:400px">
    <img class="card-img-top" src="{{asset('assets/uploads/productimage/'.$finals->photo)}}" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">{{$finals->product_slug}}</h4>
      <p class="card-text">{{$finals->short_description}}</p>
      <p class="card-text">RS:{{$finals->price}}</p>
      <a href="#" class="btn btn-primary">Order Now</a>
    </div>
  </div>  
  </div>  
  @endforeach 
  </div>
          
      
@endsection