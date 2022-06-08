@extends('layout.ecom')
@section('content')
<div class="container">
   <h1 class="text-center">Add New Category</h1>
   <div class="row">
   <div class="col-6">
<form method="post" action="{{url('/savedata')}}" enctype="multipart/form-data">
   @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name:</label>
    <input type="name" class="form-control" name="name"  >
  </div>
</div>
<div class="col-6">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Slug:</label>
    <input type="name" class="form-control" name="slug"  >
  </div>
</div>
<div class="col-12">
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description:</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
</div>
</div>
<div class="col-md-6 mb-3">
   <label for="">Status:</label>
   <input type=checkbox name="status"  >                      
            </div>
<div class="col-md-6 mb-3">
<label for="">Popular:</label>
   <input type=checkbox name="popular"  > 
</div>

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