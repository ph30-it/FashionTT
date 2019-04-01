@extends('layout')
@section('title', 'List Search')
@section('content')
<div class="container">
	@if(isset($product))
	<h3 style="text-align: center;margin-top:10px">Danh sách tìm kiếm : Tìm thấy {{count($product)}} sản phẩm hợp lệ</h3>
	@endif
	<div class="search-hotel">
		<form action="{{route('list-search')}}" method="POST">
			@csrf
			<input type="search" class="form-controller" id="search" name="search" placeholder="Click enter after typing...">
			<input type="submit" value=" ">
		</form>
	</div>
	<div class="clearfix"></div>
	@if(isset($product))
	<div class="ads-grid_shop">
		@foreach($product as $val)
		<div class="col-md-3 product-men">
			<div class="product-shoe-info shoe">
				<div class="men-pro-item">
					<div class="men-thumb-item">
						<img src="{{asset('lib/public/images_product\/').$val['image']}}" alt="" style="height: 297.500px">
						<div class="men-cart-pro">
							<div class="inner-men-cart-pro">
								<a href="{{route('single',$val['id'])}}" class="link-product-add-cart">Quick View</a>
							</div>
						</div>
						<span class="product-new-top">New</span>
					</div>
					<div class="item-info-product">
						<h4>
							<a href="single.html">{{$val['name']}}</a>
						</h4>
						<div class="info-product-price">
							<div class="grid_meta">
								<div class="product_price">
									<div class="grid-price ">
										<span class="money ">${{$val['price']}}</span>
									</div>
								</div>
								<ul class="stars">
									<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="shoe single-item hvr-outline-out">
								<button type="button"  value="{{$val['id']}}" class="shoe-cart pshoe-cart addProduct">
									<i class="fa fa-cart-plus" aria-hidden="true"></i>
								</button>	

							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		<div class="clearfix"></div>
	</div>
	@else
	<h3 style="text-align: center">Hãy tìm kiếm cái gì đó...</h3>
	
	@endif
	<a class="b-home" href="{{url("ADMIN")}}" style="margin-left:100px">Goto AdminPage</a>
	<div class="col-md-9">
		<a class="b-home" href="{{route("shop")}}">Back to Home</a>
	</div>
</div>
@stop