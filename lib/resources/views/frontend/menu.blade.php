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
					<li><a href="{{route('about')}}">About</a></li>
					<li><a href="{{route('shop')}}">Shop Now</a></li>
					<li><a href="{{route('contact')}}">Contact</a></li>
					@if(Auth::check())
					<li><a href="{{route('logout')}}">Logout</a></li>
					<li><b style="color:red"><i>Hello {{Auth::user()->username}}!</i></b><br>
						<a href="{{route('admin-profile')}}" title="">Go To Admin</a></li>
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
			@include('frontend.cart')
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
		
			<input type="text" class="form-controller" id="search" name="search" placeholder="Click enter after typing...">
				
			</input>
			
	
	</div>
</div>

	<!-- //search -->