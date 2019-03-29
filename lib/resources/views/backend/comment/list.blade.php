@extends('backend.layout.master')
@section('title','Comment')
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">Striped Table with Hover</h4>
						<p class="category">Here is a subtitle for this table</p>
					</div>
					@include('errors.error')
					<div class="content table-responsive table-full-width">
						<button class="btn btn-susscec"><a href="{{route('product-list')}}">List Product</a></button>
						<table class="table table-hover table-striped" style="margin-bottom: 0">
							<thead>
								<th>ID  <a href="?orderby=id&sta=desc" title=""><i class="glyphicon glyphicon-arrow-up"></i></a><a href="?orderby=id&sta=asc" title=""><i class="glyphicon glyphicon-arrow-down"></i></a></th>
								<th>Content</th>
								<th>User Id  <a href="?orderby=user_id&sta=desc" title=""><i class="glyphicon glyphicon-arrow-up"></i></a><a href="?orderby=user_id&sta=asc" title=""><i class="glyphicon glyphicon-arrow-down"></i></a></th>
								<th>Product Id</th>
								<th>Create At</th>
								<th>Action</th>
							</thead>
							<tbody>
								@foreach($cmt as $item)
								<tr>
									<td>{{$item->id}}</td>
									<td>{{$item->content}}</td>
									<td>{{$item->user->username}}</td>
									<td>{{$item->product_id}}</td>
									<td>{{$item->created_at	}}</td>
									<td>
										<form action="{{route('comment-delete', $item->id)}}" method="POST">
											@csrf
											@method("DELETE")
											<button type="submid" class="btn" onclick=" return confirmdel()">Delete</button>
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						{{$cmt->links()}}
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection