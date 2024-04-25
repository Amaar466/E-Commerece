@extends('layout.ecom')
@section('content')
<h1 class="text-center">Show all Category</h1>
<div class="container">
<a href="{{route('add.index')}}" style="background-color: #0d6efd;margin-bottom: 5px;" class="btn ">Back to Category</a>
<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
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
          <td>{{$finals->description}}</td>

          <td><img src="{{asset('assets/uploads/categoryimage/'.$finals->photo)}}" style="height:70px;"></td>
          <td>
          <a href="{{ url('edit/'.$finals->id)}}" class="btn btn-info">Edit</a>

          <a href="{{ url('delete/'.$finals->id) }}" onclick="return confirm('Are you sure you want to delete this item?');"  class="btn btn-danger">Delete</a>
        </td>
        </tr>
            @endforeach
        </tbody>

    </table>
    </div>

@endsection
