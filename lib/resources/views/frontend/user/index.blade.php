@extends('frontend.user.layout')
@section('title','Profile')
@section('content')
@section('class1','active')
<div class="wrapper">
	<div class="col-md-6">
		@include('errors.error')
		<h3>THÔNG TIN TÀI KHOẢN</h3>
		<div class="w_100">
			<div class="box_info">
				<div class="list-items mb_4">
					<span class="font-weight-bold">Username:</span> <span>{{Auth::user()->username}}</span>
				</div>
				<div class="list-items mb_4">
					<span class="font-weight-bold">Email:</span> <span>{{Auth::user()->email}}</span>
				</div>
				<div class="list-items mb_4">
					<span class="font-weight-bold">Ngày đăng kí:</span> <span>{{Auth::user()->created_at->format('M d Y')}}</span>
				</div>
				<div class="list-items mb_4">
					<span class="font-weight-bold">Số lần thực hiện giao dịch:</span> <span>{{count($data)}}</span>
				</div>
				<div class="list-items mb_4">
					<button onclick="showPW()" id="btn-show" class="btn btn-primary">Đổi mật khẩu</button>
				</div>
				<div id="change-password" style="display:none">
					<form method="POST" action="{{route('changed')}}">
						@csrf
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Mật khẩu cũ" name="oldpass">
						</div>
						<div class="form-group">							
							<input type="password" class="form-control" id="exampleInputPassword" placeholder="Mật khẩu mới" name="newpass">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập lại mật khẩu mới" name="renewpass">
						</div>
						<div class="form-group">
							<div class="captcha">
								<span>{{captcha_img()}}</span>
								<button type="button" class="btn btn-success" id="refresh"><i class="glyphicon glyphicon-refresh"></i></button>
							</div>
						</div>
						<div class="form-group col-md-4">
							<input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">							
						</div>
						<button type="submit" class="btn btn-primary">Thay đổi</button>
							<button type="reset" class="btn btn-primary">Reset</button>
						</form>
					</div>

				</div>
			</div>
		</div>
		<div class="col-md-6">
			<form action="{{route('imageUP')}}" method="POST" enctype="multipart/form-data">
				@csrf
				<img src="{{asset('lib/public/images/')}}/
				@if(Auth::user()->avatar!=null)
				{{Auth::user()->avatar}}
				@else
				/user.png
				@endif
				" alt="" class="img-thumbnail" style="height: 350px;width: 350px">
				<span>Thay đổi ảnh đại diện</span><input type="file" name="image" value="">
				<input type="submit" name="" value="Thay đổi" class="btn btn-info" style="margin:5px 0">
			</form>	
		</div>
	</div>
	@stop