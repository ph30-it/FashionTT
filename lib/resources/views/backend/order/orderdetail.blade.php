@extends('backend.layout.master')
@section('title','Order')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Striped Table with Hover</h4>
                        <p class="category">Here is a subtitle for this table</p>
                    </div>
                    @include('errors.error')
                    <div class="content table-responsive table-full-width">
                    {{--     <button class="btn btn-susscec"><a href="{{route('product-create')}}">Create Product</a></button> --}}
                        <table class="table table-hover table-striped" style="margin-bottom: 0">
                            <thead>
                                
                                <th>Name Product</th>
                                <th>Order ID</th>
                                <th>Qty</th>
                                <th>Price (1)*</th>
                                <th>Amout</th>                            
                            </thead>
                            <tbody>
                                @foreach($data as $item)                                
                                <tr>                                    
                                    <td>{{$item->product->name}}</td>
                                    <td>{{$item->order_id}}</td>
                                    <td>{{$item->qty}}</td>
                                    <td>${{$item->price}}</td>
                                    <td>${{$item->price*$item->qty}}</td>
                                </tr>
                                @endforeach
                            </tbody> 
                        </table>
                    </div>
                </div>
            </div>                        
            <a href="{{route('order-list')}}" title="" class="btn btn-secondary"><i class="glyphicon glyphicon-arrow-left"></i>Back</a>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        Company
                    </a>
                </li>
                <li>
                    <a href="#">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                        Blog
                    </a>
                </li>
            </ul>
        </nav>
      
    </div>
</footer>


</div>
</div>
@endsection
