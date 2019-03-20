@extends('backend.layout.master')
@section('title','Order')
@section('content')




<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Create Category</h4>
                        <button type="button" class="btn btn-success"><a href="{{route('order-list')}}">Categories List</a></button>
                    </div>
                    @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        <li>{{$err}}</li>
                        @endforeach
                    </div>
                    @endif
                    <div class="content">
                        <form action="{{ route('category-update')}}" method="POST">

                         @csrf
                         <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="address" class="form-control" id="adress" name="adress">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Cty</label>
                                    <input type="text" class="form-control" name="cty" id="cty">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Zip Code</label>
                                    <input type="text" class="form-control" id="zip_code" name="zip_code">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" name="country" id="country">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" name="phone" id="phone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option value="on">on</option>
                                        <option value="off">off</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>total</label>
                                    <input type="number" class="form-control" id="total" name="total">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Code</label>
                                    <input type="number" class="form-control" id="code" name="code">
                                </div>
                            </div>
                        </div>

                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>User Id</label>
                                    <select class="form-control" name="user_id">
                                        @foreach($userId as $key => $value)
                                        <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
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