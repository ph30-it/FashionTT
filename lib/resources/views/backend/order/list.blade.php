@extends('backend.layout.master')
@section('title','Order')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Danh sách Order</h4>
                    </div>
                    @include('errors.error')
                    <div class="content table-responsive table-full-width">
                        {{--     <button class="btn btn-susscec"><a href="{{route('product-create')}}">Create Product</a></button> --}}
                        <table class="table table-hover table-striped">
                            <thead>
                                <td></td>
                                <th>ID</th>
                                <th>Adress</th>
                                <th>Cty</th>
                                <th>Zip Code</th>
                                <th>Country Id</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Total</th>                              
                                <th>User Id</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($order as $item)
                                <tr>
                                    <td><a href="{{route('orderDetail-show',$item->id)}}" title="Hủy"><i class="glyphicon glyphicon-zoom-in"></i></a></td>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->adress}}</td>
                                    <td>{{$item->cty}}</td>
                                    <td>{{$item->zip_code}}</td>
                                    <td>{{$item->country}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>@if($item->status==0)
                                        <a href="{{route('order-comfirm', $item->id)}}?act=1" title="Duyệt"><i class="glyphicon glyphicon-ok-sign"></i></a>
                                        <a href="{{route('order-comfirm', $item->id)}}?act=2" title="Hủy"><i class="glyphicon glyphicon-remove-sign"></i></a>
                                        @else
                                        <i class="glyphicon glyphicon-ok">
                                        @endif</td>
                                        <td>{{$item->total}}</td>                                    
                                        <td>{{$item->user->username}}</td>
                                        <td>
                                            <a href="{{route('order-edit', $item->id)}}">Edit</a>
                                       {{--  <form action="{{route('product-delete', $item->id)}}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submid" class="btn">Delete</button>
                                        </form> --}}


                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$order->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
