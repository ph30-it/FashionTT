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
                       <a class="btn btn-success" href="{{route('order-list')}}">Categories List</a>
                    </div>
                   @include('errors.error')
                    <div class="content">
                        <form action="{{route('order-update',$order->id)}}" method="POST">
                         @csrf
                          @method('PUT')
                         <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="address" class="form-control" id="adress" name="adress" value="{{$order->adress}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Cty</label>
                                    <input type="text" class="form-control" name="cty" id="cty" value="{{$order->cty}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Zip Code</label>
                                    <input type="text" class="form-control" id="zip_code" name="zip_code" value="{{$order->zip_code}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" name="country" id="country" value="{{$order->country}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" name="phone" id="phone" value="{{$order->phone}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option value="0">Xử lý sau</option>
                                        <option value="1">Duyệt</option>
                                        <option value="2">Từ chối</option>
                                    </select>
                                </div>
                            </div>
                        </div>                  
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Code</label>
                                    <label><b>{{$order->code}}</b></label>
                                    
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