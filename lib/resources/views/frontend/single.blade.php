

@extends('layout')
@section('title', 'Shop')
@section('content')
@section('css')
<link rel="stylesheet" href="{{asset('lib/public/css/flexslider.css')}}" type="text/css" media="screen" />
<link href="{{asset('lib/public/css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css' />
<!-- Owl-carousel-CSS -->
<link rel="stylesheet" type="text/css" href="{{asset('lib/public/css/jquery-ui1.css')}}">
@endsection
<div class="banner_top innerpage" id="home">
	@include('frontend.menu')

	<div class="clearfix"></div>

	<div class="services-breadcrumb_w3ls_agileinfo">
		<div class="inner_breadcrumb_agileits_w3">

			<ul class="short">
				<li><a href="http://localhost/web/">Home</a><i>|</i></li>
				<li>Single</li>
			</ul>
		</div>
	</div>
	<!-- //banner_inner -->
</div>

<!-- //banner -->
<!-- top Products -->
<div class="ads-grid_shop">
	<div class="shop_inner_inf">
		<div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">

					<ul class="slides">
						@foreach ($single['images'] as  $val)
						<li data-thumb="{{asset('lib/public/images_product')}}/{{$val['name']}}">
							<div class="thumb-image"> <img src="http://localhost/web/public/images/shoes/<?=$val['name']?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						@endforeach
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
			<h3><?=$single['name']?>
				<p><span class="item_price">$<?=$single['price']?></span>
					<del>$<?=$single['sale']?></del>
				</p>
				<div class="rating1">
					<ul class="stars">
						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="occasional">
					<?=$single['description'] ?>
					<div class="clearfix"> </div>
				</div>
				<div class="occasion-cart">
					<div class="shoe single-item single_page_b">
						<form action="" method="POST">
							<button type="button" name="submit" value="<?=$single['id']?>" class="addProduct"					
								style="font-size: 13px;
								color: #fff;
								background: #1d1d1d;
								text-decoration: none;
								position: relative;
								border: none;
								border-radius: 0;
								text-transform: uppercase;
								padding: .7em 1em;
								outline: none;
								letter-spacing: 1px;
								font-weight: 600;
							}">
						Add to cart</button>	

					</form>


				</div>

			</div>
			<ul class="social-nav model-3d-0 footer-social social single_page">
				<li class="share">Share On : </li>
				<li>
					<a href="#" class="facebook">
						<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
					</a>
				</li>
				<li>
					<a href="#" class="twitter">
						<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
					</a>
				</li>
				<li>
					<a href="#" class="instagram">
						<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
					</a>
				</li>
				<li>
					<a href="#" class="pinterest">
						<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
					</a>
				</li>
			</ul>

		</div>
		<div class="clearfix"> </div>
		<div class="new_arrivals">
			<h3>Featured Products</h3>
			@foreach ($view as $key => $value)
			<div class="col-md-3 product-men women_two">
				<div class="product-shoe-info shoe">
					<div class="men-pro-item">
						<div class="men-thumb-item">
							<img src="{{asset('lib/public/images_product')}}/<?=$value['image']?>">
							<div class="men-cart-pro">
								<div class="inner-men-cart-pro">
									<a href="{{route('single',$value['id'])}}" class="link-product-add-cart">Quick View</a>
								</div>
							</div>
							<span class="product-new-top">New</span>
						</div>
						<div class="item-info-product">
							<h4>
								<a href=""><?=$value['name']?></a>
							</h4>
							<div class="info-product-price">
								<div class="grid_meta">
									<div class="product_price">
										<div class="grid-price ">
											<span class="money ">$<?=$value['price']?></span>
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
									<button type="submit" class="shoe-cart pshoe-cart addproduct">
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


	</div>
</div>
<a href="#home" id="toTop" class="scroll" style="display: block;">
	<span id="toTopHover" style="opacity: 1;"> </span>
</a>


<script type="text/javascript" src="{{asset('lib/public/js/jquery-2.1.4.min.js')}}"></script>
<script language="JavaScript">
	function setVisibility(id, visibility) {
		document.getElementById(id).style.display = visibility;
	}
</script>

<script>
	$(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
		$('#verticalTab').easyResponsiveTabs({
			type: 'vertical',
			width: 'auto',
			fit: true
		});
	});
</script>

<script>
	$(window).load(function () {
		$('.flexslider').flexslider({
			animation: "slide",
			controlNav: "thumbnails"
		});
	});
</script>
<script type="text/javascript">
	jQuery(document).ready(function ($) {
		$(".scroll").click(function (event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 1000);
		});
	});
</script>
@section('js')
<script type="text/javascript" src="{{asset('lib/public/js/bootstrap-3.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/public/js/imagezoom.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/public/js/jquery.flexslider.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/public/js/easy-responsive-tabs.js')}}"></script>
@endsection
@stop