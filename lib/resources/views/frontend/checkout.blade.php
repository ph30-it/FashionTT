@extends('layout')
@section('css')
<link href="{{asset('lib/public/css/checkout.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('title','Checkout')
@section('content')
<div class="banner_top innerpage" id="home">
	@include('frontend.menu')
	<div class="clearfix"></div>
</div>
<div class="ads-grid_shop">
	<div class="shop_inner_inf">
		@if($data=Session::get('cart'))
		<div class="privacy about">
			<h3>Chec<span>kout</span></h3>

			<div class="checkout-right">
				<h4>Your shopping cart contains: <span>{{count($data)}} Products</span></h4>
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
						@foreach($data as $k => $val)

						<tr class="rem1">
							<td class="invert">1</td>
							<td class="invert-image" style="width: 40%;"><a href=""><img src="{{asset('lib/public/images_product/')}}/{{$val['image']}}" class="img-responsive"></a></td>
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
									<div class="close1 remove"> </div>
								</div>

							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="checkout-left">
				<div class="col-md-4 checkout-left-basket">
					<h4>Continue to basket</h4>
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
				<div class="col-md-8 address_form">
					<h4>Add a new Details</h4>
					<form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
						<section class="creditly-wrapper wrapper">
							<div class="information-wrapper">
								<div class="first-row form-group">
									<div class="controls">
										<label class="control-label">Full name: </label>
										<input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
									</div>
									<div class="card_number_grids">
										<div class="card_number_grid_left">
											<div class="controls">
												<label class="control-label">Mobile number:</label>
												<input class="form-control" type="text" placeholder="Mobile number">
											</div>
										</div>
										<div class="card_number_grid_right">
											<div class="controls">
												<label class="control-label">Landmark: </label>
												<input class="form-control" type="text" placeholder="Landmark">
											</div>
										</div>
										<div class="clear"> </div>
									</div>
									<div class="controls">
										<label class="control-label">Town/City: </label>
										<input class="form-control" type="text" placeholder="Town/City">
									</div>
									<div class="controls">
										<label class="control-label">Address type: </label>
										<select class="form-control option-w3ls">
											<option>Office</option>
											<option>Home</option>
											<option>Commercial</option>

										</select>
									</div>
								</div>
								<button class="submit check_out">Delivery to this Address</button>
							</div>
						</section>
					</form>
					<div class="checkout-right-basket">
						<a href="payment.html">Make a Payment </a>
					</div>
				</div>

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
