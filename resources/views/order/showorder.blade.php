@extends('layout.ecom')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>My Orders</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Order date</th>
                                <th>Tracking number</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $finals)
                            <tr>
                                <td>{{date('d-m-y',strtotime($finals->created_at))}}</td>
                                <td>{{$finals->tracking_no}}</td>
                                <td>{{$finals->total_price}}</td>
                                <td>{{$finals->status=='0' ? 'pending':'completed'}}</td>
                                <td>
                                    <a href="{{url('admin/view-orders/'.$finals->id)}}" class="btn btn-primary">View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection