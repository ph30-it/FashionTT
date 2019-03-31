<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('lib/public/css/userindex.css')}}" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="{{asset('lib/public/images')}}/
					@if(Auth::user()->avatar!=null)
					{{Auth::user()->avatar}}
					@else
					/user.png
					@endif
					" class="img-responsive img-fluid">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						{{Auth::user()->username}}
					</div>
					<div class="profile-usertitle-job">
						Customer
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<a href="{{route('shop')}}" class="btn btn-success btn-sm">SHOPPING</a>
					<a href="{{url('user/')}}" class="btn btn-danger btn-sm">HOME</a>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li  class="@yield('class1')">
							<a href="{{url('user/')}}">
								<i class="glyphicon glyphicon-user"></i>
							General </a>
						</li>
						<li class="@yield('class3')">
							<a href="{{route('list-tran')}}">
								<i class="glyphicon glyphicon-list"></i>
							List Transaction </a>
						</li >
						<li>
							<a href="{{route('logout')}}">
								<i class="	glyphicon glyphicon-log-out"></i>
							Logout </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
			<div class="profile-content">
				@yield('content')
			</div>
		</div>
	</div>
</div>
<br>
<br>
<script type="text/javascript">
	function showPW() {
		var x = document.getElementById("change-password");
		if (x.style.display === "block") {
			x.style.display = "none";
			document.getElementById('btn-show').innerHTML="Đổi Mật khẩu";
		} else {
			x.style.display = "block";
			document.getElementById('btn-show').innerHTML="Hủy";
		}

	}
	$('#refresh').click(function(){
		$.ajax({
			type:'GET',
			url:'{{route('refreshcaptcha')}}',
			success:function(data){
        // $(".captcha span").html(data.captcha);
        $('.captcha span').html(data);
    }
});
	});
	setTimeout(function() {
		$('#status').slideUp('slow');
	}, 3000);
</script>
</body>
</html>
