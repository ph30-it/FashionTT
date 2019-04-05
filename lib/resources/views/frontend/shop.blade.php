@extends('layout')
@section('title', 'Shop')
@section('content')
<div class="ads-grid_shop">
	<div class="shop_inner_inf">
		<div class="side-bar col-md-3">
			<div class="search-hotel">
				<h3 class="agileits-sear-head">Search Here..</h3>
				<form action="{{route('list-search')}}" method="POST">
					@csrf
					<input type="search" class="form-controller" id="search" name="search" placeholder="Click enter after typing...">
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
				<h3 class="agileits-sear-head">Categories</h3>
				<ul  name="parent_id">
					<?php menu($category); ?>
				</ul>
			</div>
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
				@foreach($view as $vi)
				<div class="special-sec1">
					<div class="col-xs-4 img-deals">
						<a href="{{route('single',$vi['id'])}}"><img src="{{asset('lib/public/images_product\/').$vi['image']}}" alt=""></a>
					</div>
					<div class="col-xs-8 img-deal1">
						<h3>{{$vi['name']}}</h3>
						<a href="{{route('single',$vi['id'])}}">${{$vi['price']}}</a>
					</div>
					<div class="clearfix"></div>
				</div>
				@endforeach
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
					@include('frontend.products')
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
<style type="text/css" media="screen">
	.inner-men-cart-pro .link-product-add-cart {
		width: 51%;
		top: 0px;
		left: 25%;
		margin: 0 auto;
		position: absolute;
		transition: all 0.5s ease-out 0s;
	}
</style>{{-- 
@section('js')
<script type="text/javascript">
	$(window).on('hashchange', function() {
		if (window.location.hash) {
			var page = window.location.hash.replace('#', '');
			if (page == Number.NaN || page <= 0) {
				return false;
			}else{
				getData(page);
			}
		}
	});
	$(document).ready(function()
	{
		$(document).on('click', '.pagination a',function(event)		{
			event.preventDefault();
			$('li').removeClass('active');
			$(this).parent('li').addClass('active');
			var myurl = $(this).attr('href');
			var page=$(this).attr('href').split('page=')[1];			
			getData(page);
		});

	});
	function getData(page){
		$.ajax(
		{
			url: '?page=' + page,
			type: "get",
			datatype: "html"
		}).done(function(data){
			$(".product-sec1").empty().html(data);
			location.hash = page;			
		}).fail(function(jqXHR, ajaxOptions, thrownError){
			alert('No response from server');
		});
	}
</script>
@endsection --}}