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
						
					</div>
					@include('errors.error')
					<div class="content table-responsive table-full-width">
						<a href="{{route('user-create')}}" class="btn btn-susscec">Create User</a>
						<table class="table table-hover table-striped">
							<thead>
								<th>ID</th>
								<th>User Name</th>
								<th>Email</th>
								<th>Avatar</th>
								<th>Role Id</th>
								<th>Created At</th>
								<th>Action</th>
							</thead>
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
						{{$user->links()}}
					</div>
				</div>
			</div>
	</div>
</div>





@endsection