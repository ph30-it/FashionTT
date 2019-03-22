 <!DOCTYPE html>
 <html lang="zxx">

 <head>
 	<title>Trang chủ</title>
 	<!-- custom-theme -->
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
 	<!-- //custom-theme -->
 	<link href="{{asset('lib/public/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
 	{{-- <link rel="stylesheet" href="../../public/css/shop.css" type="text/css" media="screen" property="" /> --}}
 	<link href="{{asset('lib/public/css/style7.css')}}" rel="stylesheet" type="text/css" media="all" />
 	<!-- Owl-carousel-CSS -->
 	<link href="{{asset('lib/public/css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css' />
 	<link href="{{asset('lib/public/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
 	<!-- font-awesome-icons -->
 	<link href="{{asset('lib/public/css/font-awesome.css')}}" rel="stylesheet">
 	<link href="{{asset('lib/public/css/shop.css')}}" rel="stylesheet">
 	<!-- //font-awesome-icons -->
 	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
 	rel="stylesheet">
 	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet"></head>

 	<body>
 		<!-- banner -->
 		<div class="banner_top" id="home">
 			<div class="wrapper_top_w3layouts">

 				<div class="header_agileits">
 					<div class="logo">
 						<h1><a class="navbar-brand" href="#"><span>Thuong</span> </a> <a class="navbar-brand" href="{{route('shop')}}"><i> &nbsp;&nbsp;SHOPING NOW</i></a></h1>
 					</div>


 					<div class="overlay overlay-contentpush">
 						<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

 						<nav>
 							<ul>
 								<li><a href="{{route('index')}}" class="active">Home</a></li>
 								<li><a href="{{route('about')}}">About</a></li>
 								<li><a href="{{route('shop')}}">Shop Now</a></li>
 								<li><a href="{{route('contact')}}">Contact</a></li>
 								@if(Auth::check())
 								<li><a href="{{route('logout')}}">Logout</a></li>
 								<li><b style="color:red"><i>Hello {{Auth::user()->username}}!</i></b><br>
 									<a href="{{route('category-list')}}" title="">Go To Admin</a></li>
 									@else
 									<li><a href="{{route('login')}}">Login / Register</a></li>
 									@endif
 								</ul>
 							</nav>
 						</div>
 						<div class="mobile-nav-button">
 							<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
 						</div>			

 						<div class="clearfix"></div>
 					</div>
 					<!-- /slider -->
 					<div class="slider">
 						<div class="callbacks_container">
 							<ul class="rslides callbacks callbacks1" id="slider4">

 								<li>
 									<div class="banner-top2">
 										<div class="banner-info-wthree">
 											<h3>Nike</h3>
 											<p>Xem cảm thấy tốt như thế nào.</p>

 										</div>

 									</div>
 								</li>
 								<li>
 									<div class="banner-top3">
 										<div class="banner-info-wthree">
 											<h3>Heels</h3>
 											<p>Cho tất cả các bước chân của cuộc sống.</p>

 										</div>

 									</div>
 								</li>
 								<li>
 									<div class="banner-top">
 										<div class="banner-info-wthree">
 											<h3>Sneakers</h3>
 											<p>Thương hiệu nổi tiếng hàng đầu.</p>

 										</div>

 									</div>
 								</li>
 								<li>
 									<div class="banner-top1">
 										<div class="banner-info-wthree">
 											<h3>Adidas</h3>
 											<p>Tự tin trên mỗi bước chân.</p>

 										</div>

 									</div>
 								</li>
 							</ul>
 						</div>
 						<div class="clearfix"> </div>
 					</div>
 					<!-- //slider -->
 					<ul class="top_icons">
 						<li><a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
 						<li><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
 						<li><a href="#"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
 						<li><a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a></li>

 					</ul>
 				</div>
 			</div>
 			<!-- //banner -->

 			<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
 			<!-- js -->
 			<script type="text/javascript" src="{{asset('lib/public/js/jquery-2.1.4.min.js')}}"></script>
 			<!-- //js -->
 			<!-- /nav -->
 			<script src="{{asset('lib/public/js/modernizr-2.6.2.min.js')}}"></script>
 			<script src="{{asset('lib/public/js/classie.js')}}"></script>
 			<script src="{{asset('lib/public/js/demo1.js')}}"></script>
 			<script src="{{asset('lib/public/js/responsiveslides.min.js')}}"></script>

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
 			<!-- js for portfolio lightbox -->
 			<!-- start-smoth-scrolling -->
 			<script src="{{asset('lib/public/js/move-top.js')}}"></script>
 			<script src="{{asset('lib/public/js/easing.js')}}"></script>
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
 			<!-- //end-smoth-scrolling -->
 			<script language="JavaScript">
 				function setVisibility(id, visibility) {
 					document.getElementById(id).style.display = visibility;
 				}
 			</script>
 			<script src="{{asset('lib/public/js/bootstrap-3.1.1.min.js')}}"></script>
 		</body>

 		</html>