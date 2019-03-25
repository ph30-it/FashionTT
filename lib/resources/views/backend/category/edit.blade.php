@extends('backend.layout.master')
@section('title','Edit Category')
@section('content')



<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Category</h4>
                        @include('errors.error')
                        <button type="button" class="btn btn-success">
                            <a href="{{route('category-list')}}">Categories List</a>
                        </button>
                    </div>

                    <div class="content">
                        <form action="{{ route('category-update', $category->id)}}" method="POST">
                           @csrf
                           @method('PUT')
                           <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="{{$category->name}}" id="name" name="name" value="{{$category->name}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <select class="form-control" name="category_id">
                                    <option value="0">Danh mục cha</option>
                                    @foreach($list_cate as $key => $value)
                                    <option value="{{$value['id']}}">{{$value['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info btn-fill pull-right">Edit Category</button>
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