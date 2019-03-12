@extends('layout')
@section('title', 'Shop')
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
				<li>Shop</li>
			</ul>
		</div>
	</div>
	<!-- //banner_inner -->
</div>

<!-- //banner -->
<!-- top Products -->
<div class="ads-grid_shop">
	<div class="shop_inner_inf">
		<!-- tittle heading -->

		<!-- //tittle heading -->
		<!-- product left -->
		<div class="side-bar col-md-3">
			<div class="search-hotel">
				<h3 class="agileits-sear-head">Search Here..</h3>
				<form action="#" method="post">
					<input type="search" placeholder="Product name..." name="search" required="">
					<input type="submit" value=" ">
				</form>
			</div>
			<!-- price range -->
			<div class="range">
				<h3 class="agileits-sear-head">Price range</h3>
				<ul class="dropdown-menu6">
					<li>

						<div id="slider-range"></div>
						<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
					</li>
				</ul>
			</div>
			<!-- //price range -->
			<!--preference -->
			<div class="left-side">
				<h3 class="agileits-sear-head">Occasion</h3>
				<ul>
					<li>
						<input type="checkbox" class="checked">
						<span class="span">Casuals</span>
					</li>
					<li>
						<input type="checkbox" class="checked">
						<span class="span">Party</span>
					</li>
					<li>
						<input type="checkbox" class="checked">
						<span class="span">Wedding</span>
					</li>
					<li>
						<input type="checkbox" class="checked">
						<span class="span">Ethnic</span>
					</li>
				</ul>
			</div>
			<!-- // preference -->
			<!-- discounts -->
			<div class="left-side">
				<h3 class="agileits-sear-head">Discount</h3>
				<ul>
					<li>
						<input type="checkbox" class="checked">
						<span class="span">5% or More</span>
					</li>
					<li>
						<input type="checkbox" class="checked">
						<span class="span">10% or More</span>
					</li>
					<li>
						<input type="checkbox" class="checked">
						<span class="span">20% or More</span>
					</li>
					<li>
						<input type="checkbox" class="checked">
						<span class="span">30% or More</span>
					</li>
					<li>
						<input type="checkbox" class="checked">
						<span class="span">50% or More</span>
					</li>
					<li>
						<input type="checkbox" class="checked">
						<span class="span">60% or More</span>
					</li>
				</ul>
			</div>
			<!-- //discounts -->
			<!-- reviews -->
			<div class="customer-rev left-side">
				<h3 class="agileits-sear-head">Customer Review</h3>
				<ul>
					<li>
						<a href="#">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span>5.0</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<span>4.0</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<span>3.5</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<span>3.0</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<span>2.5</span>
						</a>
					</li>
				</ul>
			</div>
			<!-- //reviews -->
			<!-- deals -->
			<div class="deal-leftmk left-side">
				<h3 class="agileits-sear-head">Special Deals</h3>
				<div class="special-sec1">
					<div class="col-xs-4 img-deals">
						<img src="{{asset('lib/public/images/s4.jpg')}}" alt="">
					</div>
					<div class="col-xs-8 img-deal1">
						<h3>Shuberry Heels</h3>
						<a href="single.html">$180.00</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="special-sec1">
					<div class="col-xs-4 img-deals">
						<img src="{{asset('lib/public/images/s2.jpg')}}" alt="">
					</div>
					<div class="col-xs-8 img-deal1">
						<h3>Chikku Loafers</h3>
						<a href="single.html">$99.00</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="special-sec1">
					<div class="col-xs-4 img-deals">
						<img src="{{asset('lib/public/images/s1.jpg')}}" alt="">
					</div>
					<div class="col-xs-8 img-deal1">
						<h3>Bella Toes</h3>
						<a href="single.html">$165.00</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="special-sec1">
					<div class="col-xs-4 img-deals">
						<img src="{{asset('lib/public/images/s5.jpg')}}" alt="">
					</div>
					<div class="col-xs-8 img-deal1">
						<h3>Red Bellies</h3>
						<a href="single.html">$225.00</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="special-sec1">
					<div class="col-xs-4 img-deals">
						<img src="{{asset('lib/public/images/s3.jpg')}}" alt="">
					</div>
					<div class="col-xs-8 img-deal1">
						<h3>(SRV) Sneakers</h3>
						<a href="single.html">$169.00</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //deals -->

		</div>
		<!-- //product left -->
		<!-- product right -->
		<div class="left-ads-display col-md-9">
			<div class="wrapper_top_shop">
				<div class="col-md-6 shop_left">
					<img src="{{asset('lib/public/images/banner')}}3.jpg" alt="">
					<h6>40% off</h6>
				</div>
				<div class="col-md-6 shop_right">
					<img src="{{asset('lib/public/images/banner')}}2.jpg" alt="">
					<h6>50% off</h6>
				</div>
				<div class="clearfix"></div>
				<!-- product-sec1 -->
				<div class="product-sec1">
					<!--/mens-->
					<div class="col-md-4 product-men">
						<div class="product-shoe-info shoe">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="{{asset('lib/public/images/s1.jpg')}}" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product">
									<h4>
										<a href="single.html">Bella Toes </a>
									</h4>
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<div class="grid-price ">
													<span class="money ">$675.00</span>
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
											<form action="#" method="post">
												<input type="hidden" name="cmd" value="_cart">
												<input type="hidden" name="add" value="1">
												<input type="hidden" name="shoe_item" value="Bella Toes">
												<input type="hidden" name="amount" value="675.00">
												<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

												<a href="#" data-toggle="modal" data-target="#myModal1"></a>
											</form>

										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 product-men">
						<div class="product-shoe-info shoe">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="{{asset('lib/public/images/s2.jpg')}}" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product">
									<h4>
										<a href="single.html">Chikku Loafers </a>
									</h4>
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<div class="grid-price ">
													<span class="money ">$405.00</span>
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
											<form action="#" method="post">
												<input type="hidden" name="cmd" value="_cart">
												<input type="hidden" name="add" value="1">
												<input type="hidden" name="shoe_item" value="Chikku Loafers">
												<input type="hidden" name="amount" value="405.00">
												<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

												<a href="#" data-toggle="modal" data-target="#myModal1"></a>
											</form>

										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 product-men">
						<div class="product-shoe-info shoe">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="{{asset('lib/public/images/s3.jpg')}}" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product">
									<h4>
										<a href="single.html">(SRV) Sneakers </a>
									</h4>
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<div class="grid-price ">
													<span class="money ">$375.00</span>
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
											<form action="#" method="post">
												<input type="hidden" name="cmd" value="_cart">
												<input type="hidden" name="add" value="1">
												<input type="hidden" name="shoe_item" value="(SRV) Sneakers">
												<input type="hidden" name="amount" value="375.00">
												<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

												<a href="#" data-toggle="modal" data-target="#myModal1"></a>
											</form>

										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- //mens -->
					<!-- /womens -->
					<div class="col-md-4 product-men women_two">
						<div class="product-shoe-info shoe">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="{{asset('lib/public/images/s4.jpg')}}" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product">
									<h4>
										<a href="single.html">Shuberry Heels </a>
									</h4>
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<div class="grid-price ">
													<span class="money ">$575.00</span>
												</div>
											</div>
											<ul class="stars">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="shoe single-item hvr-outline-out">
											<form action="#" method="post">
												<input type="hidden" name="cmd" value="_cart">
												<input type="hidden" name="add" value="1">
												<input type="hidden" name="shoe_item" value="Shuberry Heels">
												<input type="hidden" name="amount" value="575.00">
												<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

												<a href="#" data-toggle="modal" data-target="#myModal1"></a>
											</form>

										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 product-men women_two">
						<div class="product-shoe-info shoe">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="{{asset('lib/public/images/s5.jpg')}}" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product">
									<h4>
										<a href="single.html">Red Bellies </a>
									</h4>
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<div class="grid-price ">
													<span class="money ">$325.00</span>
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
											<form action="#" method="post">
												<input type="hidden" name="cmd" value="_cart">
												<input type="hidden" name="add" value="1">
												<input type="hidden" name="shoe_item" value="Red Bellies">
												<input type="hidden" name="amount" value="325.00">
												<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

												<a href="#" data-toggle="modal" data-target="#myModal1"></a>
											</form>

										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 product-men women_two">
						<div class="product-shoe-info shoe">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="{{asset('lib/public/images/s6.jpg')}}" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product">
									<h4>
										<a href="single.html">Catwalk Flats</a>
									</h4>
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<div class="grid-price ">
													<span class="money ">$425.00</span>
												</div>
											</div>
											<ul class="stars">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="shoe single-item hvr-outline-out">
											<form action="#" method="post">
												<input type="hidden" name="cmd" value="_cart">
												<input type="hidden" name="add" value="1">
												<input type="hidden" name="shoe_item" value="Catwalk Flats">
												<input type="hidden" name="amount" value="425.00">
												<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

												<a href="#" data-toggle="modal" data-target="#myModal1"></a>
											</form>

										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- //womens -->
					<!-- /mens -->
					<div class="col-md-4 product-men">
						<div class="product-shoe-info shoe">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="{{asset('lib/public/images/s7.jpg')}}" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product">
									<h4>
										<a href="single.html">Running Shoes</a>
									</h4>
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<div class="grid-price ">
													<span class="money ">$875.00</span>
												</div>
											</div>
											<ul class="stars">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="shoe single-item hvr-outline-out">
											<form action="#" method="post">
												<input type="hidden" name="cmd" value="_cart">
												<input type="hidden" name="add" value="1">
												<input type="hidden" name="shoe_item" value="Running Shoes">
												<input type="hidden" name="amount" value="875.00">
												<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

												<a href="#" data-toggle="modal" data-target="#myModal1"></a>
											</form>

										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 product-men">
						<div class="product-shoe-info shoe">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="{{asset('lib/public/images/s8.jpg')}}" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product">
									<h4>
										<a href="single.html">Sukun Casuals</a>
									</h4>
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<div class="grid-price ">
													<span class="money ">$505.00</span>
												</div>
											</div>
											<ul class="stars">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="shoe single-item hvr-outline-out">
											<form action="#" method="post">
												<input type="hidden" name="cmd" value="_cart">
												<input type="hidden" name="add" value="1">
												<input type="hidden" name="shoe_item" value="Sukun Casuals">
												<input type="hidden" name="amount" value="505.00">
												<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

												<a href="#" data-toggle="modal" data-target="#myModal1"></a>
											</form>

										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 product-men">
						<div class="product-shoe-info shoe">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="{{asset('lib/public/images/s9.jpg')}}" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product">
									<h4>
										<a href="single.html">Bank Sneakers</a>
									</h4>
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<div class="grid-price ">
													<span class="money ">$635.00</span>
												</div>
											</div>
											<ul class="stars">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="shoe single-item hvr-outline-out">
											<form action="#" method="post">
												<input type="hidden" name="cmd" value="_cart">
												<input type="hidden" name="add" value="1">
												<input type="hidden" name="shoe_item" value="Bank Sneakers">
												<input type="hidden" name="amount" value="635.00">
												<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

												<a href="#" data-toggle="modal" data-target="#myModal1"></a>
											</form>

										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- //mens -->
					<div class="clearfix"></div>

				</div>

				<!-- //product-sec1 -->
				<div class="col-md-6 shop_left shp">
					<img src="{{asset('lib/public/images/banner')}}4.jpg" alt="">
					<h6>21% off</h6>
				</div>
				<div class="col-md-6 shop_right shp">
					<img src="{{asset('lib/public/images/banner')}}1.jpg" alt="">
					<h6>31% off</h6>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
@endsection