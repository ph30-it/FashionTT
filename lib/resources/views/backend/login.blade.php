<!DOCTYPE html>
<html lang="en" >

<head>
	<meta charset="UTF-8">
	<title>Login & Sign Up</title>
	<link href="{{asset('lib/public/css/login.css')}}" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="wrapper fadeInDown">
		<div id="formContent">
			<!-- Tabs Titles -->
			<h2 class="active">Sign In</a> </h2>
			<h2 class="inactive underlineHover"><a href="{{route('register')}}" title="">Sign Up</a> </h2>
			<!-- Icon -->
			<div class="fadeIn first">
				<img src="{{asset('lib/public/images/user.png')}}" id="icon" alt="User Icon" />
			</div>
			@include('errors.error')
			<form action="{{route('logined')}}" method="POST" >
				@csrf
				<input type="text" id="login" class="fadeIn second" name="username" placeholder="Username" value="{{old('username')}}">
				<input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" value="{{old('password')}}">
				<input type="submit" class="fadeIn fourth" value="Log In"><br>
				<input type="checkbox" name="remember" value="remember">Remember me

			</form>

			<!-- Remind Passowrd -->
			<div id="formFooter">
				<a class="underlineHover" href="#">Forgot Password?</a>
				 <a class="underlineHover" href="#"><i class="fa fa-facebook-square"></i> Login with Facebook</a>
			</div>

		</div>

	</div>
</body>
<script type="text/javascript" src="{{asset('lib/public/js/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript">
	setTimeout(function() {
	$('#status').slideUp('slow');
}, 3000);
</script>
</html>
