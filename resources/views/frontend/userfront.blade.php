@extends('layout.front')
@section('title')

welcome to home;
@endsection

@section('content')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
		  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
		  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
		  <div class="carousel-item active">
			<img src="images/img4.jpeg" class="d-block w-100 vh-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
			  <h5>Shopify ecommerce</h5>
			  <p>Shopify Inc. is a Canadian multinational e-commerce company headquartered in Ottawa,</p>
			</div>
		  </div>
		  <div class="carousel-item">
			<img src="images/img5.png" class="d-block w-100 vh-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
			  <h5 class="text-dark fs-3">Electronic commerce</h5>
			  <p class="text-dark fs-4">The buying and selling of goods and services, or the transmitting of funds or data,.</p>
			</div>
		  </div>
		  <div class="carousel-item">
			<img src="images/img3.jpg" class="d-block w-100 vh-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
     
			</div>
		  </div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Next</span>
		</button>
	  </div>
	  <!------End Of Courosul--------->
    
	  <div class="container">
    <h1 class="mt-5">Trending All Category</h1>
    <div class="row">

     @foreach($trending_category as $finals)
    
    <div class="col-md-4 owl-theme mt-5">
        <div class="item">
            <div class="card" style="width:300px;height:420px">
              <a href="{{ route('view.category', [$finals->id])}}"> <img class="card-img-top" src="{{asset('assets/uploads/categoryimage/'.$finals->photo)}}" alt="Card image" style="width:100%"></a>
              <div class="card-body">
                <h4 class="card-title">{{$finals->name}}</h4>
                <p class="card-text">{{$finals->slug}}</p>
                <p class="card-text">{{$finals->description}}</p>
                <p href="#" type="checkbox">{{$finals->popular}}</p>
              </div>
            </div>
        </div>
    </div>
    @endforeach 

    </div>
    </div>

	<div class="container pt-3 pb-3">
    <h1 class="mt-5">Trending All Product</h1>
    <div class="row">
      @foreach($trending_product as $finals)
    <div class="col-md-4 owl-theme mt-5">
        <div class="item">
        <div class="card" style="width:280px">
       <a href="{{ route('view.product', [$finals->id])}}">  <img class="card-img-top"  src="{{asset('assets/uploads/productimage/'.$finals->photo)}}" alt="Card image" style="width:100%"></a>
        
        <div class="card-body">
          <h4 class="card-title">{{$finals->product_slug}}</h4>
          <p class="card-text">{{$finals->short_description}}</p>
          <p class="card-text">{{$finals->status}}</p>
          <p href="#" type="checkbox">{{$finals->trending}}</p>
        </div>
      </div>
        </div>
      </div>
      @endforeach
    </div>
    </div>





	
@endsection