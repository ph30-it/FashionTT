@extends('layout')
@section('css',asset('lib/public/css/checkout.css'))
@section('title','Checkout')
@section('content')
<div class="banner_top innerpage" id="home">
	<div class="wrapper_top_w3layouts">
		<div class="header_agileits">
			<div class="logo inner_page_log">
				<h1><a class="navbar-brand" href="index.html"><span>Downy</span> <i>Shoes</i></a></h1>
			</div>
			<div class="overlay overlay-contentpush">
				<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

				<nav>
					<ul>
						<li><a href="index.html" class="active">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="404.html">Team</a></li>
						<li><a href="shop.html">Shop Now</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav>
			</div>
			<div class="mobile-nav-button">
				<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
			</div>
			<!-- cart details -->
			<div class="top_nav_right">
				<div class="shoecart shoecart2 cart cart box_1">
					<form action="#" method="post" class="last">
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="top_shoe_cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //cart details -->
	<!-- search -->
	<div class="search_w3ls_agileinfo">
		<div class="cd-main-header">
			<ul class="cd-header-buttons">
				<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
			</ul>
		</div>
		<div id="cd-search" class="cd-search">
			<form action="#" method="post">
				<input name="Search" type="search" placeholder="Click enter after typing...">
			</form>
		</div>
	</div>
	<!-- //search -->
	<div class="clearfix"></div>
	<!-- /banner_inner -->
	<div class="services-breadcrumb_w3ls_agileinfo">
		<div class="inner_breadcrumb_agileits_w3">

			<ul class="short">
				<li><a href="index.html">Home</a><i>|</i></li>
				<li>Check Out</li>
			</ul>
		</div>
	</div>
	<!-- //banner_inner -->
</div>

<!-- //banner -->
<!-- top Products -->
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
