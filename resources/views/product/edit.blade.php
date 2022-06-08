@extends('layout.ecom')
@section('content')
<div class="container">
   <h1 class="text-center"> Edit Product</h1>
   <div class="row">
   <div class="col-6">
<form method="post" action="{{url('proupdate/'.$product->id)}}" enctype="multipart/form-data">
   @csrf
  <div class="mb-3 mt-4">

  <select class="form-select" name="cate_id">
       <option Value="">Select a Category</option> 
     
   
        <option value="{{$product->id}}">{{$product->category->name}}</option> 
       
        
    </select>
    
  </div>
</div>
<div class="col-6">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Slug:</label>
    <input type="text" class="form-control" name="product_slug" value="{{$product->product_slug}}"  >
   
</div>
</div>
<div class="col-12">
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Short_Description:</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="short_description" value="">{{$product->short_description}}</textarea>
</div>
</div>
<div class="col-md-6 mb-3">
   <label for="">Status:</label>
   <input type=checkbox name="status" {{ $product->status ? 'checked' : ''}}  >                      
            </div>
<div class="col-md-6 mb-3">
<label for="">Trending:</label>
   <input type=checkbox name="trending" {{ $product->trending ? 'checked' : ''}} > 
</div>
<img src="{{asset('assets/uploads/productimage/'.$product->photo)}}" style="width: 100px;">
<div class="input-group mb-3">
  <input type="file" class="form-control" name="photo" id="inputGroupFile02">
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
</div>
<div class="col-10" style="margin-left:400px;">
<div class="form-group ">
    <input class="btn btn-primary " type="submit" value="Save Data" />
</div>
</div>
</div>
</form>
</div>

@endsection