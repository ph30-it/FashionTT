@extends('frontend.user.layout')
@section('title','List Transaction')
@section('content')
<div class="wrapper">
	<table class="table table-striped">
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

		</div>
		
		@stop