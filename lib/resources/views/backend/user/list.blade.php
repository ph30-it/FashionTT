@extends('backend.layout.master')
@section('title','User')
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
							<div class="content table-responsive table-full-width">
								<button class="btn btn-susscec"><a href="{{route('user-create')}}">Create Product</a></button>
								<table class="table table-hover table-striped">
									<thead>
										<th>ID</th>
										<th>User Name</th>
										<th>Email</th>
										<th>Email Verified At</th>
										<th>Avatar</th>
										<th>Role Id</th>
										<th>Action</th>
									</thead>
									<tbody>
										@foreach($user as $item)
										<tr>
											<td>{{$item->id}}</td>
											<td>{{$item->username}}</td>
											<td>{{$item->email}}</td>
											<td>{{$item->email_verified_at}}</td>
											<td>{{$item->avatar}}</td>
											<td>{{$item->role_id}}</td>

											<td>
												<a href="{{route('user-edit', $item->id)}}">Edit</a>
												<form action="{{route('user-delete', $item->id)}}" method="POST">
												@csrf
													@method("DELETE")
													<button type="submid" class="btn">Delete</button>
												</form>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>

							</div>
						</div>
					</div>


					<div class="col-md-12">
						<div class="card card-plain">
							<div class="header">
								<h4 class="title">Table on Plain Background</h4>
								<p class="category">Here is a subtitle for this table</p>
							</div>
							{{-- <div class="content table-responsive table-full-width">
								<table class="table table-hover">
									<thead>
										<th>ID</th>
										<th>Name</th>
										<th>Alias</th>
										<th>Created At</th>
										<th>Updated At</th>
										<th>Parent Id</th>
										<th>Action</th>
									</thead>
									<tbody>
										@foreach($category as $item)
										<tr>
											<td>{{$item->id}}</td>
											<td>{{$item->name}}</td>
											<td>{{$item->alias}}</td>
											<td>{{$item->created_at}}</td>
											<td>{{$item->updated_at}}</td>
											<td>{{$item->parent_id}}</td>
											<td>
												<form action="{{route('category-delete', $item->id)}}" method="POST">
												@csrf
													@method("DELETE")
													<button type="submid" class="btn">Delete</button>
												</form>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>

							</div> --}}
						</div>
					</div>


				</div>
			</div>
		</div>

		<footer class="footer">
			<div class="container-fluid">
				<nav class="pull-left">
					<ul>
						<li>
							<a href="#">
								Home
							</a>
						</li>
						<li>
							<a href="#">
								Company
							</a>
						</li>
						<li>
							<a href="#">
								Portfolio
							</a>
						</li>
						<li>
							<a href="#">
								Blog
							</a>
						</li>
					</ul>
				</nav>
				<p class="copyright pull-right">
					&copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
				</p>
			</div>
		</footer>


	</div>
</div>





@endsection