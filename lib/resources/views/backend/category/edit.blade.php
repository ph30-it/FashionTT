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
                        @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                            <li>{{$err}}</li>
                            @endforeach
                        </div>
                        @endif
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
                                    <input type="text" class="form-control" placeholder="{{$category->name}}" id="name" name="name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Alias</label>
                                    <input type="text" class="form-control" placeholder="{{$category->alias}}" name="alias" id="alias">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Parent Id</label>
                                    <input type="text" class="form-control" placeholder="{{$category->parent_id}}" name="parent_id" id="parent_id" >
                                </div>
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