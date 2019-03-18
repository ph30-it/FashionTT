<!DOCTYPE html>
<html lang="en" >

<head>
	<meta charset="UTF-8">
	<title>Login & Sign Up</title>
	<link href="{{asset('lib/public/css/login.css')}}" rel="stylesheet" id="bootstrap-css">
	

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

			<!-- Login Form -->
			@if($errors->any())
			<div class="alert alert-danger">
				@foreach($errors->all() as $err)
				<li>{{$err}}</li>
				@endforeach
			</div>
			@endif
			@if(session('class'))
			<div class="alert alert-{{session('class')}}">
				<li>{{session('message')}}</li>
			</div>
			@endif
			<form action="{{route('logined')}}" method="POST" >
				@csrf
				<input type="text" id="login" class="fadeIn second" name="username" placeholder="Username" {{old('username')}}>
				<input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" {{old('password')}}>
				<input type="submit" class="fadeIn fourth" value="Log In"><br>
				<input type="checkbox" name="remember" value="remember">Remember me

			</form>

			<!-- Remind Passowrd -->
			<div id="formFooter">
				<a class="underlineHover" href="#">Forgot Password?</a>
			</div>

		</div>

	</div>
</body>
</html>
