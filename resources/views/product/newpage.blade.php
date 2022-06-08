@extends('layout.addcart')

@section('content')
<div class="container ">
   <div class="row">                
<nav aria-label="breadcrumb" >
  <ol class="breadcrumb fs-3">
    <li class="breadcrumb-item "><a href="{{url('/')}}"  value="">Collection</a></li>
    <li class="breadcrumb-item"><a href="{{url('/')}}" >{{$product->product_slug}}</a></li>
    
  </ol>
</nav>
       <div class="col-md-4 ">
       <h2 class="text-center mt-5"></h2>
         <img   src="{{asset('assets/uploads/productimage/'.$product->photo)}}"  style="width:100%">
         
       </div>
       <div class="col-md-8 mt-5">
      
       <div class="card" style="width:550px;">
       <h2 class="text-start">{{$product->product_slug}}</h2>      
  <div class="card-header ">
  
  
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">

  <?php
// get the product and stock level
if($product->trending==1) {
    echo '<button class="btn btn-success me-md-2" type="button" style="font-size:20px;" >Trending</button>' ;
} else {
    echo '<button class="btn btn-danger me-md-2" type="button" style="font-size:20px;">Out of Trending</button>';
}
            
?>

  
</div>

  </div>

  <h1 class="p-2">Price:{{$product->price}}</h1>
  <h5>Discount:10%</h5>
  <p class="p-2">{{$product->short_description}}</p>
  
  
   

   <div class="d-grid gap-2 d-md-flex">
   <?php
// get the product and stock level
if($product->quantity > 0) {
    echo '<button class="btn btn-success " type="button" style="font-size:20px;">Instock:</button> ';
} else {
    echo '<button class="btn btn-danger me-md-2" type="button" style="font-size:20px;">Out of stock</button>';
}
            
?>
</div>
<div class="col-3 mt-2">
<div class="start">
     <div class="input-group">
          <span class="input-group-btn">
              <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[2]">
                <span class="glyphicon glyphicon-minus">-</span>
              </button>
          </span>
          <input type="text" name="quant[2]" class="form-control input-number" value="10" min="1" max="100">
          <span class="input-group-btn">
              <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
                  <span class="glyphicon glyphicon-plus">+</span>
              </button>
          </span>
      </div>
	
</div>
</div>
        <div class="d-grid gap-2 d-md-block mt-2 p-2">
         <form action="{{url('/add_to_cart')}}" method="post">
           @csrf
                   
          <input type="hidden" name="product_id" value="{{$product['id']}}">
        
      
          <input class="btn btn-success " type="submit"  value="Add to Cart" />
       
          </form>
 <button class="btn btn-success mt-1" type="button" style="font-size:20px;">Add to wishlist</button>
</div>
            </div>
       </div>
   </div>


</div>

@endsection