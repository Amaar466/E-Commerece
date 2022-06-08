@extends('layout.ecom')
@section('content')

<div class="container">
   <h1 class="text-center">Add New Product</h1>
   <div class="row">
   <div class="col-6">
<form method="post" action="{{url('/save')}}" enctype="multipart/form-data">
   @csrf
  <div class="mb-3 mt-4">

  <select class="form-select" name="song_id">
       <option Value="">Select a Category</option> 
       @foreach($song as $finals)
        <option value="{{$finals->id}}">{{$finals->name}}</option> 
        @endforeach
    </select>
    
  </div>
</div>
<div class="col-6">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Slug:</label>
    <input type="name" class="form-control" name="product_slug"  >
  </div>
</div>
<div class="col-12">
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Short_Description:</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="short_description"></textarea>
</div>
</div>
<div class="col-md-6 mb-3">
   <label for="">Status:</label>
   <input type=checkbox name="status"  >                      
            </div>
<div class="col-md-6 mb-3">
<label for="">Trending:</label>
   <input type=checkbox name="trending"  > 
</div>
<div class="col-lg-6 mb-3 form-control">
<label for="">price:</label>
<input type="number" name="price" />
</div>
<div class="input-group mb-3">
  <input type="file" class="form-control" name="photo" id="inputGroupFile02">
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
</div>
<div class="col-sm-3 mx-auto">
            <div class="input-group">
                <span class="input-group-prepend">
                    <button type="button" class="btn btn-outline-secondary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                        <span class="fa fa-minus"></span>
                    </button>
                </span>
                <input type="text" name="quantity" class="form-control input-number" value="1" min="1" max="10">
                <span class="input-group-append">
                    <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus" data-field="quant[1]">
                        <span class="fa fa-plus"></span>
                    </button>
                </span>
            </div>
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


