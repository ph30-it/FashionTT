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
                        <div>
                            <button onclick="showSearch()" id="btn-show" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="search" id="search" style="display:none">
                           <form action="" method="GET">
                            <input type="text" name="search" value="" class="form-group">
                            <input type="submit" name="submit" value="Tìm kiếm" class="form-group btn btn-primarytn">
                        </form> 
                        </div>
                    </div>
                    @include('errors.error')
                    <div class="content table-responsive table-full-width">
                        <a href="{{route('product-create')}}" class="btn btn-susscec">Create Product</a>
                        <table class="table table-hover table-striped">
                            @if($search==1)
                            <div class="header">
                        <h4 class="title">Danh sách sản phẩm tìm kiếm </h4> 
                        <a href="{{route('product-list')}}" title="" class="btn"><i class="  glyphicon glyphicon-menu-left"></i>Back</a>

                        <div>
                            @else
                            <thead>
                                <th>ID <a href="?orderby=id&sta=desc" title=""><i class="glyphicon glyphicon-arrow-up"></i></a><a href="?orderby=id&sta=asc" title=""><i class="glyphicon glyphicon-arrow-down"></i></a></th>
                                <th>Name</th>
                                <th>Price <a href="?orderby=price&sta=desc" title=""><i class="glyphicon glyphicon-arrow-up"></i></a><a href="?orderby=price&sta=asc" title=""><i class="glyphicon glyphicon-arrow-down"></i></a></th>
                                <th>Sale</th>
                                <th>Category Id <a href="?orderby=category_id&sta=desc" title=""><i class="glyphicon glyphicon-arrow-up"></i></a><a href="?orderby=category_id&sta=asc" title=""><i class="glyphicon glyphicon-arrow-down"></i></a></th>
                                <th>Image</th>
                                <th>View <a href="?orderby=view&sta=desc" title=""><i class="glyphicon glyphicon-arrow-up"></i></a><a href="?orderby=view&sta=asc" title=""><i class="glyphicon glyphicon-arrow-down"></i></a></th>
                                <th>Action</th>
                            </thead>
                            @endif
                            <tbody>
                                @foreach($product as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
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
                        @if($search==2)
                        {{$product->links()}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>





    @endsection