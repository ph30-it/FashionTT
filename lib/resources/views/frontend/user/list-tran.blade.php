@extends('frontend.user.layout')
@section('title','List Transaction')
@section('content')
@section('class3','active')
<div class="wrapper">
	<table class="table table-striped">
		@if($list)
		<thead>
			<tr>
				<th scope="col">Show</th>
				<th scope="col">Trạng Thái</th>
				<th scope="col">Tổng Giá</th>
				<th scope="col">Mã GD</th>
				<th scope="col">Ngày GD</th>
			</tr>
		</thead>
		<tbody>
			@foreach($list as $val)
			<tr>
				<td><a href="{{route('transaction-details',$val['id'])}}" title=""><i class="glyphicon glyphicon-zoom-in"></i></a></td>
				<td>
					@if($val['status']==0)
					<i class="	glyphicon glyphicon-refresh"><i>
						@else
						<i class="	glyphicon glyphicon-ok"><i>
							@endif
						</td>
						<td>${{$val['total']}}</td>
						<td>{{$val['code']}}</td>
						<td>{{$val['created_at']}}</td>
					</tr>
					@endforeach
				</tbody>

			</table>
		@else
		<div  style="transform: translateY(-50%);top:50%;position: absolute;left: 40%">
			<h2>
				<a href="{{route('shop')}}" title="">Let buy now</a><i class="glyphicon glyphicon-shopping-cart" style="transform:rotateY(150deg);"></i>
			</h2>
		</div>
		@endif

		</div>
		
		@stop