@extends('backend.layout.master')
@section('title','Edit Category')
@section('content')
<style>
    .imgcr{
        border: 1px solid black;
        width: 200px;
    }
    .imgcr1{
        border: 1px solid black;
        width: 150px;
        
        margin:0 auto;
        margin-bottom: 20px;
    }
    .btn-circle {
        left: 43px;
        width: 30px;
        height: 30px;
        padding: 6px 0px;
        border-radius: 15px;
        text-align: center;
        font-size: 12px;
        line-height: 1.42857;
        position: relative;
        top: -125px;
    }
</style>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Product</h4>
                        @include('errors.error')
                        <button type="button" class="btn btn-success">
                            <a href="{{route('product-list')}}">Product List</a>
                        </button>
                    </div>

                    <div class="content">
                        <form action="{{ route('product-update', $product->id)}}" method="POST" enctype="multipart/form-data">
                           @csrf
                           @method('PUT')
                           <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" value="{{$product->name}}" id="name" name="name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" class="form-control" value="{{$product->price}}" name="price" id="price">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Sale</label>
                                    <input type="text" class="form-control" value="{{$product->sale}}" name="sale" id="sale" >
                                    <input type="hidden" class="form-control" value="{{$product->view}}" name="view" id="sale">
                                </div>
                                 <label>Categories</label>
                        <select class="form-control" name="category_id">
                            @foreach($categoryID as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" id="editor1">
                                        {{$product->description}}
                                    </textarea>                        
                                    <script> CKEDITOR.replace( 'editor1', {
                                        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                                        filebrowserImageBrowseUrl: '{{ asset('lib/public/admin/ckfinder/ckfinder.html?type=Images') }}',
                                        filebrowserFlashBrowseUrl: '{{ asset('lib/public/admin/ckfinder/ckfinder.html?type=Flash') }}',
                                        filebrowserUploadUrl: '{{ asset('lib/public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                                        filebrowserImageUploadUrl: '{{ asset('lib/public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                                        filebrowserFlashUploadUrl: '{{ asset('lib/public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
                                    } ); </script>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Image hiện tại</label>
                                    <img src="{{asset('lib/public/images_product')}}/{{$product->image}}" alt="" class="img-responsive imgcr">
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
                    </div>
                </div>
            </div>
            <div class="col-md-4 card" >
                <div class="col-md-12">
                    <label>Ảnh chi tiết</label><br>                    
                    @foreach($product->images as $k => $img)
                    <div class="form-group" id=hinh{{$k}}>
                        <img src="{{asset('lib/public/images_product')}}/{{$img->name}}" id=hinh{{$k}} alt="" class="imgcr1 img-responsive">
                    </div>
                    @endforeach    
                    <input type="file"name="ImageProductDetail[]" id="image" >
                    <input type="file"name="ImageProductDetail[]" id="image" >
                    <input type="file"name="ImageProductDetail[]" id="image" > 
                </div>
            </div>
        </form>
    </div>
</div>
<footer class="footer">
    <div class="container-fluid">
    </div>
</footer>

</div>
</div>
@endsection
