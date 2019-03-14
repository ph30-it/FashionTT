@extends('backend.layout.master')
@section('title','Edit Category')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Product</h4>
                        @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                            <li>{{$err}}</li>
                            @endforeach
                        </div>
                        @endif
                        <button type="button" class="btn btn-success">
                            <a href="{{route('product-list')}}">Product List</a>
                        </button>
                    </div>

                    <div class="content">
                        <form action="{{ route('product-update', $product->id)}}" method="POST">
                         @csrf
                         @method('PUT')
                         <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="{{$product->name}}" id="name" name="name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" class="form-control" placeholder="{{$product->price}}" name="price" id="price">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Sale</label>
                                    <input type="text" class="form-control" placeholder="{{$product->sale}}" name="sale" id="sale" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" class="form-control" placeholder="{{$product->description}}" name="description" id="description" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" placeholder="{{$product->image}}" name="image" id="image" >
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info btn-fill pull-right">Edit Product</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<footer class="footer">
    <div class="container-fluid">
    </div>
</footer>

</div>
</div>

@endsection