@extends('layout.ecom')
@section('content')
<h1 class="text-center">Show all Product</h1>
<div class="container">
<a href="{{url('product')}}" class="btn btn-success">Back to Product</a>
<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>product_slug</th>
                <th>short_description</th>
                <th>Price</th>              
                <th>Photo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach( $product as $finals)
            <tr>
          <td>{{$finals->id}}</td>
          <td>{{$finals->product_slug}}</td>
          <td>{{$finals->short_description}}</td> 
          <td>{{$finals->price}}</td>        
         <td><img  src="{{asset('assets/uploads/productimage/'.$finals->photo)}}" style="width:80px;">
        </td>
          <td>
          <a href="{{url('proedit/'.$finals->id)}}" class="btn btn-info">Edit</a> </td>
         <td> <a href="{{url('prodelete/'.$finals->id)}}" onclick="return confirm('Are you sure you want to delete this item?');"  class="btn btn-danger btn-sm">Delete</a>
        </td>
        </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
    </div>

@endsection