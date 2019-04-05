@extends('layout')
@section('css')
<link href="{{asset('lib/public/css/contact.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('lib/public/css/creditly.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('lib/public/css/easy-responsive-tabs.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('title','Contact')
@section('content')
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<h3 class="head">Contact Us</h3>
			<p class="head_para">Add Some Description</p>
			<div class="inner_section_w3ls">
				<div class="col-md-7 contact_grid_right">
					@include('errors.error')
					<h6>Please fill this form to contact with us.</h6>

					<form action="{{route('contacted')}}" method="POST">
						@csrf
						<div class="col-md-6 col-sm-6 contact_left_grid">
							<input type="text" name="name" placeholder="Name" >
							<input type="text" name="email" placeholder="Email" >
						</div>
						<div class="col-md-6 col-sm-6 contact_left_grid">
							<input type="text" name="phone" placeholder="Telephone" >
							<input type="text" name="subject" placeholder="Subject" >
						</div>
						<div class="clearfix"> </div>
						<textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" >Message...</textarea>
						<input type="submit" value="Submit">
						<input type="reset" value="Clear">
					</form>
				</div>
				<div class="col-md-5 contact-left">
					<h6>Contact Info</h6>
					<div class="visit">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
							<span class="fa fa-home" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
							<h4>Visit us</h4>
							<p>Parma Via Modena,BO, Italy</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="mail-us">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
							<span class="fa fa-envelope" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
							<h4>Mail us</h4>
							<p><a href="mailto:info@example.com">info@example.com</a></p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="call">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
							<span class="fa fa-phone" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
							<h4>Call us</h4>
							<p>+18044261149</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="visit">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
							<span class="fa fa-fax" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
							<h4>Fax</h4>
							<p>+1804426349</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"> </div>

			</div>

			<div class="clearfix"></div>

		</div>
	</div>
	<div class="contact-map">

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.5799103139734!2d108.24420381485878!3d16.08727488886982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314217f3a77a159f%3A0x5c9bb21cf7506724!2zNiBUw6JuIFRow6FpIDQsIE3Dom4gVGjDoWksIFPGoW4gVHLDoCwgxJDDoCBO4bq1bmc!5e0!3m2!1sen!2s!4v1552974709781"
		    class="map" style="border:0" allowfullscreen=""></iframe>
	</div>
	
	<!-- /newsletter-->
@stop