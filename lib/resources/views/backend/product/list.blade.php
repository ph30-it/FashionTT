@extends('backend.layout.master')
@section('title','Product')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Danh sách sản phẩm</h4>
                    </div>
                    @include('errors.error')
                    <div class="content table-responsive table-full-width">
                        <a href="{{route('product-create')}}" class="btn btn-susscec">Create Product</a>
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Sale</th>                                
                                <th>Category Id</th>
                                <th>Image</th>
                                <th>View</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($product as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td><a href="{{route('product-show', $item->id)}}">{{$item->name}}</a></td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->sale}}</td>                                    
                                    <td>{{$item->category_id}}</td>
                                    <td>{{$item->image}}</td>
                                    <td>{{$item->view}}</td>
                                    <td>
                                        <a href="{{route('product-edit', $item->id)}}">Edit</a>
                                        
                                    </td>
                                    <td><form action="{{route('product-delete', $item->id)}}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submid" onclick="return confirmdel()" class="btn">Delete</button>
                                        </form></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$product->links()}}
                    </div>
                </div>
            </div>
    </div>
</div>





@endsection