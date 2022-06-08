@extends('layout.ecom')
@section('content')
<h1 class="text-center">Show all Category</h1>
<div class="container">
<a href="{{route('add.index')}}" class="btn btn-success">Back to Category</a>
<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Description</th>               
                <th>Photo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($category as $finals)
            <tr>
          <td>{{$finals->id}}</td>
          <td>{{$finals->name}}</td>
          <td>{{$finals->slug}}</td>
          <td>{{$finals->description}}</td> 
                
          <td><img src="{{asset('assets/uploads/categoryimage/'.$finals->photo)}}" style="height:70px;"></td>
          <td>
          <a href="{{ url('edit/'.$finals->id)}}" class="btn btn-info">Edit</a> </td>
          <td> <a href="{{ url('delete/'.$finals->id) }}" onclick="return confirm('Are you sure you want to delete this item?');"  class="btn btn-danger btn-sm">Delete</a>
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