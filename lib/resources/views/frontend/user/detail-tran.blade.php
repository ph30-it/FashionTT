@extends('frontend.user.layout')
@section('title','Transaction Details')
@section('content')
<div class="wrapper">
	<h3 class="text-center">Hóa đơn chi tiết</h3>
	<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col">Stt</th>
				<th scope="col">Image</th>
				<th scope="col">Tên</th>
				<th scope="col">Số lượng</th>
				<th scope="col">Giá(1c)</th>
				<th scope="col">Tổng</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $val)
			<tr>
				<th scope="row">1</th>
				<td><img src="{{asset('lib/public/images_product')}}/{{$val['product']['image']}}" class="img-responsive zoom"  width="100px" title="Nhấn để phóng to ảnh">
					<div id="overlay"></div>
				</td>
				<td>{{$val['product']['name']}}</td>
				<td>{{$val['qty']}}</td>
				<td>${{$val['price']}}</td>
				<td>${{$val['price']*$val['qty']}}</td>
				
			</tr>	
			@endforeach
		</tbody>
	</table>
	<script type="text/javascript">
		$('.zoom').on('click', function() {
			$('#overlay')
			.css({backgroundImage: `url(${this.src})`})
			.addClass('open')
			.one('click', function() { $(this).removeClass('open'); });
		});
	</script>
	<style type="text/css" media="screen">
		img{height:100px;}
		#overlay{
			position: fixed;
			top:0;
			left:0;
			width:100%;
			height:100%;
			background: rgba(0,0,0,0.8) none 50% / contain no-repeat;
			cursor: pointer;
			visibility: hidden;
			opacity: 0;
		}
		#overlay.open {
			visibility: visible;
			opacity: 1;
		}

		#overlay:after { /* X button icon */
			content: "\2715";
			position: absolute;
			color:#fff;
			top: 10px;
			right:20px;
			font-size: 2em;
		}
	</style>
	@stop