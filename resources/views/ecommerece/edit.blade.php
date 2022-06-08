@extends('layout.ecom')
@section('content')
 <div class="container">
   <h1 class="text-center">Edit Category</h1>
   <div class="row">
   <div class="col-6">
<form method="post" action="{{url('update/'.$category->id)}}" enctype="multipart/form-data">
   @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name:</label>
    <input type="name" class="form-control" name="name" value="{{$category->name}}" >
  </div>
</div>
<div class="col-6">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Slug:</label>
    <input type="name" class="form-control" name="slug" value="{{$category->slug}}" >
  </div>
</div>
<div class="col-12">
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description:</label>
  
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$category->description}}</textarea>
</div>
</div>
<div class="col-md-6 mb-3">
   <label for="">Status:</label>
   <input type=checkbox name="status" {{ $category->status == '1' ? 'checked' : ''}} >                      
            </div>
<div class="col-md-6 mb-3">
<label for="">Popular:</label>
   <input type=checkbox name="popular"{{ $category->popular == '1' ? 'checked' : ''}} > 
</div>
<img src="{{asset('assets/uploads/categoryimage/'.$category->photo)}}" style="width: 100px;">

<div class="input-group mb-3">
  <input type="file" class="form-control" name="photo"  id="inputGroupFile02">
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