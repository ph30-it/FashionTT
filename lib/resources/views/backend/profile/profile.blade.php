@extends('backend.layout.master')
@section('title','Comment')
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="content">
					<div class="col-md-12">
						<div class="card">
							@include('errors.error')
							<div class="header">
								<h4 class="title">Users Behavior</h4>
								<p class="category">24 Hours performance</p>
							</div>
							<div class="content">
								<div class="alert alert-info">
									<span>Tổng số danh mục hiện có :{{$data['category']}} <a href="{{route('category-list')}}" title=""> Xem chi tiết<i class="glyphicon glyphicon-info-sign"></i></a></span>
								</div>
								<div class="alert alert-success">
									<span>Tổng số sản phẩm hiện có :{{$data['product']}} <a href="{{route('product-list')}}" title=""> Xem chi tiết<i class="glyphicon glyphicon-info-sign"></i></a></span>
								</div>
								<div class="alert alert-danger">
									<span>Tổng số user hiện có :{{$data['user']}} <a href="{{route('user-list')}}" title=""> Xem chi tiết<i class="glyphicon glyphicon-info-sign"></i></a></span>
								</div>
								<div class="alert alert-warning">
									<span>Tổng số order hiện có :{{$data['order']}} <a href="{{route('order-list')}}" title=""> Xem chi tiết<i class="glyphicon glyphicon-info-sign"></i></a></span>
								</div>
								<div class="alert alert-success">
									<span>Tổng số comment hiện có :{{$data['comment']}} <a href="{{route('comment-list')}}" title=""> Xem chi tiết<i class="glyphicon glyphicon-info-sign"></i></a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-user">
					<div class="image">
						<img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
					</div>
					<div class="content">
						<div class="author">							
							<img class="avatar border-gray" src="{{asset('lib/public/images')}}/{{\Auth::user()->avatar}}" alt="..."/>
							<h4 class="title">{{\Auth::user()->username}}<br />
								<small>{{\Auth::user()->email}}</small>
							</h4>	
							<button onclick="showPW()" id="btn-show" class="btn btn-primary">Đổi mật khẩu</button>
							<div id="change-password" style="display:none">
								<form method="POST" action="{{route('changepass')}}">
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
							<button onclick="showimg()" id="btnimage" class="btn btn-primary">Đổi ảnh đại diện</button>
							<form action="{{route('imgprofile')}}" method="POST" enctype="multipart/form-data" id="formimg" style="display: none">
								@csrf
								<span>Thay đổi ảnh đại diện</span><input type="file" name="image" value="">
								<input type="submit" name="" value="Thay đổi" class="btn btn-info" style="margin:5px 0">
							</form>						
						</div>
					</div>

					<hr>
					<div class="text-center">
						<button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
						<button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
						<button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
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
	function showimg() {
		var y =  document.getElementById("formimg");
		if (y.style.display === "block") {
			y.style.display = "none";
			document.getElementById('btnimage').innerHTML="Đổi ảnh đại diện";
		} else {
			y.style.display = "block";
			document.getElementById('btnimage').innerHTML="Hủy";
		}
	}
	$('#refresh').click(function(){
		$.ajax({
			type:'GET',
			url:'{{route('getnewcapt')}}',
			success:function(data){
        // $(".captcha span").html(data.captcha);
        $('.captcha span').html(data);
    }
});
	});
</script>
@endsection