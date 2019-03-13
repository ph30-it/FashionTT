<div class="wrapper_top_w3layouts">
	<div class="header_agileits">
		<div class="logo inner_page_log">
			<h1><a class="navbar-brand" href="index.html"><span>Downy</span> <i>Shoes</i></a></h1>
		</div>
		<div class="overlay overlay-contentpush">
			<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>
			<nav>
				<ul>
					<li><a href="{{route('index')}}" class="active">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="404.html">Team</a></li>
					<li><a href="{{route('shop')}}">Shop Now</a></li>
					<li><a href="contact.html">Contact</a></li>
					@if(Auth::check())
					<li><a href="{{route('logout')}}">Logout</a></li>
					<li><b style="color:red"><i>Hello {{Auth::user()->username}}!</i></b></li>
					@else
					<li><a href="{{route('login')}}">Login / Register</a></li>
					@endif
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
</div>	<!-- //cart details -->
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