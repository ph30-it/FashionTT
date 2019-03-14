@extends('backend.layout.master')
@section('title','product')
@section('content')



<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Create Product</h4>
                        @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                            <li>{{$err}}</li>
                            @endforeach
                        </div>
                        @endif
                        <button type="button" class="btn btn-success"><a href="{{route('product-list')}}">Categories List</a></button>
                    </div>
                    <div class="content">
                        <form action="{{ route('product-store')}}" method="POST">
                         @csrf
                         <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="nummber" class="form-control" name="price" id="price">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Sale</label>
                                    <input type="number" class="form-control" name="sale" id="sale" value="0" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="description" id="description" >
                                </div>
                            </div>
                        </div>
                        <label>Categories</label>
                        <select class="form-control" name="category_id">
                            @foreach($categoryID as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image" id="image" >
                                </div>
                            </div>
                        </div>
                                    <input type="hidden" class="form-control" name="view" value="0"  >

                        <button type="submit" class="btn btn-info btn-fill pull-right">Create product</button>
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