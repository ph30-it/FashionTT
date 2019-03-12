@extends('layout')
@section('css','asd')
@section('content')
<div class="banner_top" id="home">
		@include('frontend.menu')
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
								<p>See how good they feel.</p>

							</div>

						</div>
					</li>
					<li>
						<div class="banner-top3">
							<div class="banner-info-wthree">
								<h3>Heels</h3>
								<p>For All Walks of Life.</p>

							</div>

						</div>
					</li>
					<li>
						<div class="banner-top">
							<div class="banner-info-wthree">
								<h3>Sneakers</h3>
								<p>See how good they feel.</p>

							</div>

						</div>
					</li>
					<li>
						<div class="banner-top1">
							<div class="banner-info-wthree">
								<h3>Adidas</h3>
								<p>For All Walks of Life.</p>

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
@endsection