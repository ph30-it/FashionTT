@extends('layout')
@section('css')
<link href="{{asset('lib/public/css/checkout.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('title','Checkout')
@section('content')
<div class="ads-grid_shop">
	<div class="shop_inner_inf">
		@if($data=Session::get('cart'))
		<div class="privacy about">
			<h3>Chec<span>kout</span></h3>

			<div class="checkout-right">
				<h4>Your shopping cart contains: <span class="count">{{count($data)}} Products</span></h4>
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>SL No.</th>
							<th>Product</th>
							<th>Quality</th>
							<th>Product Name</th>
							<th>Price</th>
							<th>Remove</th>
						</tr>
					</thead>
					<tbody class="appear-here">
						<?php $i=1 ?>
						@foreach($data as $k => $val)

						<tr class="rem1">
							<td class="invert">{{$i}}</td>
							<td class="invert-image" style="width: 40%;"><a href="{{route('single',$val['id'])}}"><img src="{{asset('lib/public/images_product/')}}/{{$val['image']}}" class="img-responsive"></a></td>
							<td class="invert">
								<div class="quantity">
									<div class="quantity-select">								
										<input class="value sbmincart-quantity" type="text" data-id="{{$val['id']}}" value="{{$val['qty']}}" autocomplete="off" max="5">
									</div>
								</div>
							</td>
							<td class="invert">{{$val['name']}}</td>
							<td class="invert money{{$val['id']}}" data-idx="{{$val['id']}}">${{$val['qty']*$val['price']}}</td>
							<td class="invert">
								<div class="rem">
									<div class="close1 remove" data-sbmincart-idx="{{$val['id']}}"> </div>
								</div>

							</td>
						</tr>
						<?php $i++ ?>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="checkout-left">
				<div class="col-md-4 checkout-left-basket">
					<h4><a href="{{route('shop')}}" title="" style="color:white">Continue Shopping</a></h4>
					<?php $tongtien=0?>
					<ul class="appear-here1">@foreach($data as $k => $val)
						<?php 
						$tongtien+=$data[$k]['price']*$data[$k]['qty']; 
						?>	
						<li>{{$val['name']}} <i>-</i> <span>${{$val['price']}}*{{$val['qty']}}</span></li>
						@endforeach
						<li>Total <i>-</i> <span>${{$tongtien}}</span></li>
					</ul>
				</div>
				@if(Auth::check())
				<div class="col-md-8 address_form">
					@include('errors.error')
					<h4>Add a new Details</h4>
					<form action="{{route('checkout')}}" method="post" class="creditly-card-form agileinfo_form">
						@csrf
						<section class="creditly-wrapper wrapper">
							<div class="information-wrapper">
								<div class="first-row form-group">
									<div class="card_number_grids">
										<div class="card_number_grid_left">
											<div class="controls">
												<label class="control-label">Country :</label>
												<input class="form-control" name="country" type="text" placeholder="Country">
											</div>
										</div>
										<div class="card_number_grid_left">
											<div class="controls">
												<label class="control-label">Zipcode :</label>
												<input class="form-control" name="zip_code" type="number" placeholder="Country">
											</div>
										</div>
										<div class="card_number_grid_right">
											<div class="controls">
												<label class="control-label">Town/Cty :</label>
												<input class="form-control" name="cty" type="text" placeholder="Cty">
											</div>
										</div>
										<div class="controls">
										<label class="control-label">Address :</label>
										<input class="billing-address-name form-control" type="text" name="address" placeholder="Address">
									</div>
										<div class="clear"> </div>

									</div>
									<div class="controls">
										<label class="control-label">Phone : </label>
										<input class="form-control"  name="phone" type="text" placeholder="Phone Number">
									</div>
									<div class="controls">
										<label class="control-label">Total : </label>
										<input class="form-control"  name="total" type="text" value="${{$tongtien}}" disabled>
										<input class="form-control"  name="total" type="hidden" value="{{$tongtien}}">
									</div>
								</div>
								<button class="submit check_out">Delivery to this Address</button>
							</div>
						</section>
					</form>
					<div class="checkout-right-basket">
						
					</div>
				</div>
				@else
				<div class="col-md-8 address_form">
					<h2>Bạn cần <a href="{{route('login')}}" title="">đăng nhập</a> để thực hiện thanh toán</h2>
				</div>
				@endif()
				<div class="clearfix"> </div>
				<div class="clearfix"></div>
			</div>
		</div>
		@else
		<div class="row" style="height: 180px;padding: 15px">
			<h1 style="text-align: center">Giỏ hàng rỗng</h1>
			<div class="center-block col-md-2" style="float: none;">
				<a href="{{route('shop')}}" title="" class="btn btn-primary center-block">Quay về trang chủ</a>
			</div>
		</div>
		@endif
	</div>
	@endsection
