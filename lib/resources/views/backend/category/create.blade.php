@extends('backend.layout.master')
@section('title','Category')
@section('content')




<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Create Category</h4>
                        <button type="button" class="btn btn-success"><a href="{{route('category-list')}}">Categories List</a></button>
                    </div>
                    @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        <li>{{$err}}</li>
                        @endforeach
                    </div>
                    @endif
                    <div class="content">
                        <form action="{{ route('category-store')}}" method="POST">

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
                                    <label>Alias</label>
                                    <input type="text" class="form-control" name="alias" id="alias">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Parent Id</label>
                                    <select class="form-control" name="parent_id">
                                        <option value="0"> Please Choose Categories</option>
                                        <?php cate_parent($parent); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-info btn-fill pull-right">Create Category</button>
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