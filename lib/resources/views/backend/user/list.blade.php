@extends('backend.layout.master')
@section('title','User')
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">Danh sách USER</h4>
						<div>
							<button onclick="showSearch()" id="btn-show" class="btn btn-primary"><i class="fa fa-search"></i></button>
						</div>
						<div class="search" id="search" style="display:none">
							<form action="" method="GET">
								<input type="text" name="search" value="" class="form-group">
								<input type="submit" name="submit" value="Tìm kiếm" class="form-group btn btn-primarytn">
							</form> 
						</div>
					</div>
					@include('errors.error')
					<div class="content table-responsive table-full-width">
						<a href="{{route('user-create')}}" class="btn btn-susscec">Create User</a>
						<table class="table table-hover table-striped">
							@if($search==1)
							<div class="header">
								<h4 class="title">Danh sách sản phẩm tìm kiếm </h4> 
								<a href="{{route('user-list')}}" title="" class="btn"><i class="  glyphicon glyphicon-menu-left"></i>Back</a>
								<div>
									@else
									<thead>
										<th>ID <a href="?orderby=id&sta=desc" title=""><i class="glyphicon glyphicon-arrow-up"></i></a><a href="?orderby=id&sta=asc" title=""><i class="glyphicon glyphicon-arrow-down"></i></a></th>
										<th>User Name</th>
										<th>Email</th>
										<th>Avatar</th>
										<th>Role Id</th>
										<th>Created At</th>
										<th>Action</th>
									</thead>
									@endif
									<tbody>
										@foreach($user as $item)
										<tr>
											<td>{{$item->id}}</td>
											<td>{{$item->username}}</td>
											<td>{{$item->email}}</td>
											<td>{{$item->avatar}}</td>
											<td>{{$item->role_id}}</td>
											<td>
												<a title="{{$item->created_at}}">{{\Carbon\Carbon::createFromTimeStamp(strtotime($item->created_at))->diffforHumans()}}</a></td>

												<td>
													<a href="{{route('user-edit', $item->id)}}">Edit</a>										
												</td>
												<td><form action="{{route('user-delete', $item->id)}}" method="POST">
													@csrf
													@method("DELETE")
													<button type="submid" class="btn" onclick="return confirmdel()">Delete</button>
												</form></td>
											</tr>
											@endforeach
										</tbody>
									</table>
									@if($search==2)
									{{$user->links()}}
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>





				@endsection