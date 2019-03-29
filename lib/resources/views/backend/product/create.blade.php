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
                        @include('errors.error')
                        <a href="{{route('product-list')}}" class="btn btn-success">Categories List</a>
                    </div>
                    <div class="content">
                        <form action="{{ route('product-store')}}" method="POST" enctype="multipart/form-data">
                         @csrf
                         <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="nummber" class="form-control" name="price" id="price" value="{{old('price')}}">
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
                                <div class="form-group" style="display: none">
                                    <label>View</label>
                                    <input type="number" class="form-control" name="view" id="view" value="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" id="editor1">{{old('description')}}</textarea>                           
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

                        <label>Categories</label>
                        <select class="form-control" name="category_id">
                            @foreach($categoryID as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ảnh đại diện</label>
                                    <input type="file" class="form-control" name="image" id="image" >
                                </div>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" name="view" value="0"  >
                        <button type="submit" class="btn btn-info btn-fill pull-right">Create product</button>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Ảnh chi tiết</label>
                        <input type="file" class="form-control" name="ImageProductDetail[]" id="image" >
                        <label>Ảnh chi tiết</label>
                        <input type="file" class="form-control" name="ImageProductDetail[]" id="image" >
                        <label>Ảnh chi tiết</label>
                        <input type="file" class="form-control" name="ImageProductDetail[]" id="image" >
                    </div>
                    <div class="form-group here"></div>
                </div>
                <button type="button" class="btn btn-primary" id="addimg">Thêm Image</button>
            </div>
        </form>
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
@section('js')
<script type="text/javascript">
    $(document).ready(function(){
        var html = '<label>Ảnh chi tiết</label><input type="file" class="form-control" name="ImageProductDetail[]" id="image" >';
        $('#addimg').click(function(){
            $('.here').append(html);
        });
    });
</script>
@endsection