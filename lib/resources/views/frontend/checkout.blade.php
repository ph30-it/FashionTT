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
		<div class="privacy about">
			<h3>Chec<span>kout</span></h3>

			<div class="checkout-right">
				<h4>Your shopping cart contains: <span>3 Products</span></h4>
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
					<tbody>
						<tr class="rem1">
							<td class="invert">1</td>
							<td class="invert-image"><a href="single.html"><img src="{{asset('lib/public/images/s1.jpg')}}" alt=" " class="img-responsive"></a></td>
							<td class="invert">
								<div class="quantity">
									<div class="quantity-select">
										<div class="entry value-minus">&nbsp;</div>
										<div class="entry value"><span>1</span></div>
										<div class="entry value-plus active">&nbsp;</div>
									</div>
								</div>
							</td>
							<td class="invert">Bella Toes</td>

							<td class="invert">$675.00</td>
							<td class="invert">
								<div class="rem">
									<div class="close1"> </div>
								</div>

							</td>
						</tr>
						<tr class="rem2">
							<td class="invert">2</td>
							<td class="invert-image"><a href="single.html"><img src="{{asset('lib/public/images/s5.jpg')}}" alt=" " class="img-responsive"></a></td>
							<td class="invert">
								<div class="quantity">
									<div class="quantity-select">
										<div class="entry value-minus">&nbsp;</div>
										<div class="entry value"><span>1</span></div>
										<div class="entry value-plus active">&nbsp;</div>
									</div>
								</div>
							</td>
							<td class="invert">Red Bellies</td>

							<td class="invert">$325.00</td>
							<td class="invert">
								<div class="rem">
									<div class="close2"> </div>
								</div>

							</td>
						</tr>
						<tr class="rem3">
							<td class="invert">3</td>
							<td class="invert-image"><a href="single.html"><img src="{{asset('lib/public/images/s2.jpg')}}" alt=" " class="img-responsive"></a></td>
							<td class="invert">
								<div class="quantity">
									<div class="quantity-select">
										<div class="entry value-minus">&nbsp;</div>
										<div class="entry value"><span>1</span></div>
										<div class="entry value-plus active">&nbsp;</div>
									</div>
								</div>
							</td>
							<td class="invert">Chikku Loafers</td>

							<td class="invert">$405.00</td>
							<td class="invert">
								<div class="rem">
									<div class="close3"> </div>
								</div>

							</td>
						</tr>

					</tbody>
				</table>
			</div>
			<div class="checkout-left">
				<div class="col-md-4 checkout-left-basket">
					<h4>Continue to basket</h4>
					<ul>
						<li>Product1 <i>-</i> <span>$675.00 </span></li>
						<li>Product2 <i>-</i> <span>$325.00 </span></li>
						<li>Product3 <i>-</i> <span>$405.00 </span></li>
						<li>Total Service Charges <i>-</i> <span>$55.00</span></li>
						<li>Total <i>-</i> <span>$1405.00</span></li>
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
	</div>
@endsection
