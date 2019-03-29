<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Downy Shoes Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<link href="{{asset('lib/public/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="{{asset('lib/public/css/shop.css')}}" type="text/css" media="screen" property="" />
	<link href="{{asset('lib/public/css/style7.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('lib/public/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="{{asset('lib/public/css/font-awesome.css')}}" rel="stylesheet">
	@yield('css')

	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
	<div class="banner_top innerpage" id="home">
		@include('frontend.menu')
		<div class="clearfix"></div>
	</div>
	@yield('content')
	<div class="mid_slider_w3lsagile">
		<div class="col-md-3 mid_slider_text">
			<h5>Some More Shoes</h5>
		</div>
		<div class="col-md-9 mid_slider_info">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class=""></li>
					<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="2" class=""></li>
					<li data-target="#myCarousel" data-slide-to="3" class=""></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('lib/public/images/g1.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('lib/public/images/g2.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('lib/public/images/g3.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('lib/public/images/g4.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
					<div class="item active">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('lib/public/images/g5.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('lib/public/images/g6.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('lib/public/images/g2.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('lib/public/images/g1.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('lib/public/images/g1.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('lib/public/images/g2.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('lib/public/images/g3.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('lib/public/images/g4.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('lib/public/images/g1.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('lib/public/images/g2.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('lib/public/images/g3.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('lib/public/images/g4.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="fa fa-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="fa fa-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				<!-- The Modal -->

			</div>
		</div>

		<div class="clearfix"> </div>
	</div>
{{-- 	<div class="newsletter_w3layouts_agile">
		<div class="col-sm-6 newsleft">
			<h3>Sign up for Newsletter !</h3>
		</div>
		<div class="col-sm-6 newsright">
			<form action="#" method="post">
				<input type="email" placeholder="Enter your email..." name="email" required="">
				<input type="submit" value="Submit">
			</form>
		</div>

		<div class="clearfix"></div>
	</div> --}}
	<!-- footer -->
	<div class="footer_agileinfo_w3">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
				<h2><a href="{{url('/')}}"><span>D</span>owny Shoes </a></h2>
				<p>Lorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
				<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="https://www.facebook.com/thuongnguyen130499" class="facebook" target="blank">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/@thuongchul1304" class="twitter" target="blank">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/thuongnguyen1304/" class="instagram" target="blank">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
					<a href="#" class="pinterest">
						<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
					</a>
				</li>
			</ul>
		</div>
		<div class="col-md-9 footer-right">
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Our <span>Information</span> </h4>
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li><a href="{{url('about')}}">About</a></li>
						<li><a href="404.html">Services</a></li>
						<li><a href="">Short Codes</a></li>
						<li><a href="{{route('contact')}}">Contact</a></li>
					</ul>
				</div>

				<div class="col-md-5 sign-gd-two">
					<h4>Store <span>Information</span></h4>
					<div class="address">
						<div class="address-grid">
							<div class="address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="address-right">
								<h6>Phone Number</h6>
								<p>+1 234 567 8901</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="address-grid">
							<div class="address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="address-right">
								<h6>Email Address</h6>
								<p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="address-grid">
							<div class="address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="address-right">
								<h6>Location</h6>
								<p>Broome St, NY 10002,California, USA.

								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 sign-gd flickr-post">
					<h4>Flickr <span>Posts</span></h4>
					<ul>
						<li><a href="single.html"><img src="{{asset('lib/public/images/t1.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="{{asset('lib/public/images/t2.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="{{asset('lib/public/images/t3.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="{{asset('lib/public/images/t4.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="{{asset('lib/public/images/t1.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="{{asset('lib/public/images/t2.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="{{asset('lib/public/images/t3.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="{{asset('lib/public/images/t2.jpg')}}" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="{{asset('lib/public/images/t4.jpg')}}" alt=" " class="img-responsive" /></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</body>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
@if(Auth::check())
<a href="{{route('admin-profile')}}" id="gotoHome"  style="display: block;">
	<span id="toTopHover" style="opacity: 1;"><b>{{Auth::user()->username}}!</b><br>
	Đến trang quản trị</span>
</a>
@endif

<script type="text/javascript" src="{{asset('lib/public/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<!-- /nav -->
<script src="{{asset('lib/public/js/modernizr-2.6.2.min.js')}}"></script>
<script src="{{asset('lib/public/js/classie.js')}}"></script>
<script src="{{asset('lib/public/js/demo1.js')}}"></script>
<!-- //nav -->
<script src="{{asset('lib/public/js/search.js')}}"></script>
<script src="{{asset('lib/public/js/responsiveslides.min.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/public/js/bootstrap-3.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/public/js/easy-responsive-tabs.js')}}"></script>

<script>
	$(function () {
		$("#slider4").responsiveSlides({
			auto: true,
			pager: true,
			nav: true,
			speed: 1000,
			namespace: "callbacks",
			before: function () {
				$('.events').append("<li>before event fired.</li>");
			},
			after: function () {
				$('.events').append("<li>after event fired.</li>");
			}
		});
	});
</script>
<script type="text/javascript" src="{{asset('lib/public/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/public/js/easing.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/public/js/jquery.flexslider.js')}}"></script>

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
<script>
	$(document).ready(function(){
		var url = '{{route('shopping')}}';
		var del = '{{route('delete')}}';
		var update= '{{route('update')}}';
		var searchurl= '{{route('search')}}';
		var html='';
		var product='';
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$('body').on('click','.remove',function(){ 
			html ='';
			var id = $(this).attr('data-sbmincart-idx');
			//console.log(id)
			$.ajax({
				type : "POST",
				dataType : "JSON",
				url : del,
				data : 
				{
					id : id,
					_token: '{!! csrf_token() !!}'
				},success:function(result)
				{
					console.log(result)
					html1='';
					html ='';
					html2='';
					html+='<button type="button" class="sbmincart-closer" onclick="none();">×</button>';
					if (result=='') {
						// html1+='<div class="row" style="height: 180px;padding: 15px"><h1 style="text-align: center">Giỏ hàng rỗng</h1><div class="center-block col-md-2" style="float: none;"><a href="" title="" class="btn btn-primary center-block">Quay về trang chủ</a></div></div>';
						// html+='<p class="sbmincart-empty-text" style="text-align: center;">Giỏ hàng trống <br>Let Buy Now</p>';
						//$('.shop_inner_inf').html(html1);						
						//$('#staplesbmincart').html(html);
						location.reload();
					}else{
						tongtien=0;	
						html+='<ul>';
						var i=0;
						$.each(result, function(key,value){
							tongtien+=value.price*value.qty;
							i++;
							console.log(i);
							html+='<li class="sbmincart-item"><div class="sbmincart-details-name"><a class="sbmincart-name" href="">'+value.name+'</a><ul class="sbmincart-attributes"></ul></div>';
							html+='<div class="sbmincart-details-quantity"><input class="sbmincart-quantity" type="text" data-id="'+value.id+'"  value="'+value.qty+'" autocomplete="off" max="5"></div>';
							html+='<div class="sbmincart-details-remove"> <button type="button" class="sbmincart-remove remove" data-sbmincart-idx="'+value.id+'">×</button></div>';
							html+='<div class="sbmincart-details-price"><span class="sbmincart-price">$'+value.price*value.qty+'</span></div></li>';
							html1+='<tr class="rem1">';
							html1+='<td class="invert">'+i+'</td>';
							html1+='<td class="invert-image" style="width: 40%;"><a href=""><img src="http://localhost/FashionTT/lib/public/images_product/'+value.image+'" class="img-responsive"></a></td>';
							html1+='<td class="invert"><div class="quantity"><div class="quantity-select"><input class="value sbmincart-quantity" type="text" data-id="'+value.id+'" value="'+value.qty+'" autocomplete="off" max="5"></div></div></td>';
							html1+='<td class="invert">'+value.name+'</td><td class="invert money1" data-idx="'+value.id+'">$'+value.price*value.qty+'</td><td class="invert"><div class="rem"><div class="close1 remove" data-sbmincart-idx="'+value.id+'" > </div></div></td>';
							html1+='</tr>';
							html2+='<li>'+value.name+'<i>-</i> <span>$'+value.price+'*'+value.qty+'</span></li>';

						});
						i+= ' Products';
						html+='</ul><div class="sbmincart-footer"><div class="sbmincart-subtotal"><p class="totalsub">Subtotal: $'+tongtien+' USD</p></div><a href="{{route('checkout')}}" class="sbmincart-submit" type="submit" data-sbmincart-alt="undefined">Check Out</a></div></form>';
						html2+='<li>Total <i>-</i> <span>$'+tongtien+'</span></li>';
						$('#staplesbmincart').html(html);
						$(".sbmincart-empty-text").hide();
						$('.appear-here').html(html1);
						$('.appear-here1').html(html2);	
						$('.count').html(i);	
					}
					html+='</div>';

				}
			});
		});
		$('.addProduct').click(function(){
			html ='';  
			var id = $(this).attr('value');
			console.log(id);			
			$.ajax({
				type : "POST",
				dataType : "JSON",
				url : url,
				data : 
				{
					id : id,
					_token: '{!! csrf_token() !!}'
				},success:function(result)
				{
					tongtien=0;
					html ='';
					html+='<button type="button" class="sbmincart-closer" onclick="none();">×</button><ul>';
					$.each(result, function(key,value){
						tongtien+=value.price*value.qty;
						console.log(tongtien);
						html+='<li class="sbmincart-item"><div class="sbmincart-details-name"><a class="sbmincart-name" href="">'+value.name+'</a><ul class="sbmincart-attributes"></ul></div>';
						html+='<div class="sbmincart-details-quantity"><input class="sbmincart-quantity" type="text" data-id="'+value.id+'"  value="'+value.qty+'" autocomplete="off" max="5"></div>';
						html+='<div class="sbmincart-details-remove"> <button type="button" class="sbmincart-remove remove" data-sbmincart-idx="'+value.id+'">×</button></div>';
						html+='<div class="sbmincart-details-price"><span class="sbmincart-price">$'+value.price*value.qty+'</span></div></li>';
					});
					html+='</ul><div class="sbmincart-footer"><div class="sbmincart-subtotal"><p class="totalsub">Subtotal: $'+tongtien+' USD</p></div><a href="{{route('checkout')}}" class="sbmincart-submit" type="submit" data-sbmincart-alt="undefined">Check Out</a></div>';
					$('#staplesbmincart').html(html);
					$(".sbmincart-empty-text").hide();	
					$("#staplesbmincart").show();		
					setTimeout(function() {
						$('#staplesbmincart').slideUp('slow');
					}, 3000);		
				}
			});	
		});		
		$('body').on('change','.sbmincart-quantity',function(){
			var id = $(this).attr('data-id');
			var qty = $(this).val();
			var html1='';
			var html2='';
			console.log(id);	
			console.log(qty);	
			$.ajax({
				type : "POST",
				dataType : "JSON",
				url : update,
				data : 
				{
					id : id,
					qty : qty,
					_token: '{!! csrf_token() !!}'
				},success:function(result)
				{
					html1='';
					html ='';
					html2='';
					html+='<button type="button" class="sbmincart-closer" onclick="none();">×</button>';
					if (result=='') {
						html1+='<div class="row" style="height: 180px;padding: 15px"><h1 style="text-align: center">Giỏ hàng rỗng</h1><div class="center-block col-md-2" style="float: none;"><a href="{{route('shop')}}" title="" class="btn btn-primary center-block">Quay về trang chủ</a></div></div>';
						html+='<p class="sbmincart-empty-text" style="text-align: center;">Giỏ hàng trống <br>Let Buy Now</p>';
						$('#staplesbmincart').html(html);
						$('.shop_inner_inf').html(html1);
					}else{
						tongtien=0;	
						html+='<ul>';					
						$.each(result, function(key,value){
							tongtien+=value.price*value.qty;
						//console.log(tongtien);
						html+='<li class="sbmincart-item"><div class="sbmincart-details-name"><a class="sbmincart-name" href="">'+value.name+'</a><ul class="sbmincart-attributes"></ul></div>';
						html+='<div class="sbmincart-details-quantity"><input class="sbmincart-quantity" type="text" data-id="'+value.id+'"  value="'+value.qty+'" autocomplete="off" max="5"></div>';
						html+='<div class="sbmincart-details-remove"> <button type="button" class="sbmincart-remove remove" data-sbmincart-idx="'+value.id+'">×</button></div>';
						html+='<div class="sbmincart-details-price"><span class="sbmincart-price">$'+value.price*value.qty+'</span></div></li>';
						html1+='<tr class="rem1">';
						html1+='<td class="invert">1</td>';
						html1+='<td class="invert-image" style="width: 40%;"><a href=""><img src="http://localhost/FashionTT/lib/public/images_product/'+value.image+'" class="img-responsive"></a></td>';
						html1+='<td class="invert"><div class="quantity"><div class="quantity-select"><input class="value sbmincart-quantity" type="text" data-id="'+value.id+'" value="'+value.qty+'" autocomplete="off" max="5"></div></div></td>';
						html1+='<td class="invert">'+value.name+'</td><td class="invert money1" data-idx="'+value.id+'">$'+value.price*value.qty+'</td><td class="invert"><div class="rem"><div class="close1 remove"> </div></div></td>';
						html1+='</tr>';
						html2+='<li>'+value.name+'<i>-</i> <span>$'+value.price+'*'+value.qty+'</span></li>';

					});
						html+='</ul><div class="sbmincart-footer"><div class="sbmincart-subtotal"><p class="totalsub">Subtotal: $'+tongtien+' USD</p></div><a href="{{route('checkout')}}" class="sbmincart-submit" type="submit" data-sbmincart-alt="undefined">Check Out</a></div></form>';
						html2+='<li>Total <i>-</i> <span>$'+tongtien+'</span></li>';
						$('#staplesbmincart').html(html);
						$(".sbmincart-empty-text").hide();
						$('.appear-here').html(html1);
						$('.appear-here1').html(html2);		
					}
					html+='</div>';

				}
			});			
		});
		$('body').on('keyup click','#search',function(){
		//$('#search').on('keyup',function(){
			var search = $(this).val();
			console.log(search);
			product ='';
			var url_image="{{asset('lib/public/images_product/')}}";
			$.ajax({
				type : 'POST',
				dataType : "JSON",
				url : searchurl,
				data:{'search':search,_token: '{!! csrf_token() !!}'},
				success:function(result){
					if (result=='') {
						product+='<div style="height:300px"><p style="text-align:center" class="center-block">Không tìm thấy sản phẩm thích hợp</p></div>';
						$('.product-sec1').html(product);
					}else{
						$.each(result, function(key,value){
							product+='<div class="col-md-4 product-men"><div class="product-shoe-info shoe"><div class="men-pro-item"><div class="men-thumb-item"><img src="'+url_image+'/'+value.image+'" alt=""><div class="men-cart-pro"><div class="inner-men-cart-pro"><a href="{{url('single')}}'+value.id+'" class="link-product-add-cart" style="">Quick View</a></div></div></div><span class="product-new-top">New</span></div><div class="item-info-product"><h4><a href="single.html">'+value.name+'</a></h4><div class="info-product-price"><div class="grid_meta"><div class="product_price"><div class="grid-price "><span class="money ">$'+value.price+'</span></div></div><ul class="stars"><li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li><li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li><li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li><li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li><li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li></ul></div><div class="shoe single-item hvr-outline-out"><button type="button"  value="'+value.id+'" class="shoe-cart pshoe-cart addProduct"><i class="fa fa-cart-plus" aria-hidden="true"></i></button></div></div><div class="clearfix"></div></div></div></div></div>';
						});
						product+='<div class="clearfix"></div>';
											//$("").hide();	
											$('.product-sec1').html(product);
										}
									}
								});
		});
	});
setTimeout(function() {
	$('#status').slideUp('slow');
}, 3000);
setTimeout(function() {
	$('#staplesbmincart').slideUp('slow');
}, 3000);
</script>

<script language="JavaScript">
	function none() {
		document.getElementById("staplesbmincart").style.display = "none";
	}
</script>
<script language="JavaScript">
	function inline() {
		document.getElementById("staplesbmincart").style.display = "inline";
	}
</script>
@yield('js')

</html>







