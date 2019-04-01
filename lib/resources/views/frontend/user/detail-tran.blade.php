@extends('frontend.user.layout')
@section('title','Transaction Details')
@section('content')
<link rel="stylesheet" href="{{asset('lib/public/css/TimeCircles.css')}}" />
<script type="text/javascript" src="{{asset('lib/public/js/TimeCircles.js')}}"></script>

<div class="wrapper">
	<h3 class="text-center">Hóa đơn chi tiết</h3>
	@if($order[0]['status']==0)
	<?php
	$date = strtotime($order[0]['created_at']);
	$date = strtotime("+5 day", $date);	
	?>
	<div id="CountDownTimer" data-date="{{date('M d, Y h:i:s', $date)}}" style="width: 500px; height: 150px;margin:0 auto"></div>Trong vòng 5 ngày hàng sẽ được chuyển đến tận nơi!
	@elseif($order[0]['status']==2)
	<div class="row "><img src="{{asset('lib/public/images/error.png')}}" alt="" width="100px" class="img-responsive center-block"><p class="text-center" style="font-size:20px;font-weight: bold">Giao hàng thất bại hoặc bạn đã hủy đơn đặt hàng</p></div>
	@else
	<div class="row "><img src="{{asset('lib/public/images/success.png')}}" alt="" width="100px" class="img-responsive center-block"><p class="text-center" style="font-size:20px;font-weight: bold">Đã giao hàng thành công</p></div>
	@endif
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
			<?php $i=1;?>
			@foreach($order[0]['orderdetails'] as $val)
			<tr>
				<th scope="row">{{$i}}</th>
				<td><img src="{{asset('lib/public/images_product')}}/{{$val['product']['image']}}" class="img-responsive zoom"  width="100px" title="Nhấn để phóng to ảnh">
					<div id="overlay"></div>
				</td>
				<td>{{$val['product']['name']}}</td>
				<td>{{$val['qty']}}</td>
				<td>${{$val['price']}}</td>
				<td>${{$val['price']*$val['qty']}}</td>
				
			</tr>
			<?php $i++;?>	
			@endforeach
		</tbody>
	</table>
	<a href="{{route('list-tran')}}" title="" class="btn btn-primary">Back</a>
	<script type="text/javascript">
		$('.zoom').on('click', function() {
			$('#overlay')
			.css({backgroundImage: `url(${this.src})`})
			.addClass('open')
			.one('click', function() { $(this).removeClass('open'); });
		});
	</script>
	<script>
		var date = $("#date").val();
		console.log(date);
		$("#CountDownTimer").TimeCircles({

			"animation": "ticks",
			"bg_width": 1,
			"fg_width": 0.04,
			"circle_bg_color": "#EEEEEE",
			"time": {
				"Days": {
					"text": "Days",
					"color": "#CCCCCC",
					"show": true
				},
				"Hours": {
					"text": "Hours",
					"color": "#CCCCCC",
					"show": true
				},
				"Minutes": {
					"text": "Minutes",
					"color": "#CCCCCC",
					"show": true
				},
				"Seconds": {
					"text": "Seconds",
					"color": "#CCCCCC",
					"show": true
				}
			}
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

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	@stop