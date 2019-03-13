@extends('backend.layout.master')
@section('title','Product')
@section('content')

<div class="wrapper">
	<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

		<!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


		<div class="sidebar-wrapper">
			<div class="logo">
				<a href="http://www.creative-tim.com" class="simple-text">
					Creative Tim
				</a>
			</div>

			<ul class="nav">
				<li>
					<a href="dashboard.html">
						<i class="pe-7s-graph"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li>
					<a href="user.html">
						<i class="pe-7s-user"></i>
						<p>User Profile</p>
					</a>
				</li>
				<li class="active">
					<a href="table.html">
						<i class="pe-7s-note2"></i>
						<p>Table List</p>
					</a>
				</li>
				<li>
					<a href="typography.html">
						<i class="pe-7s-news-paper"></i>
						<p>Typography</p>
					</a>
				</li>
				<li>
					<a href="icons.html">
						<i class="pe-7s-science"></i>
						<p>Icons</p>
					</a>
				</li>
				<li>
					<a href="maps.html">
						<i class="pe-7s-map-marker"></i>
						<p>Maps</p>
					</a>
				</li>
				<li>
					<a href="notifications.html">
						<i class="pe-7s-bell"></i>
						<p>Notifications</p>
					</a>
				</li>
				<li class="active-pro">
					<a href="upgrade.html">
						<i class="pe-7s-rocket"></i>
						<p>Upgrade to PRO</p>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Table List</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-left">
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
							</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-globe"></i>
								<b class="caret hidden-sm hidden-xs"></b>
								<span class="notification hidden-sm hidden-xs">5</span>
								<p class="hidden-lg hidden-md">
									5 Notifications
									<b class="caret"></b>
								</p>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Notification 1</a></li>
								<li><a href="#">Notification 2</a></li>
								<li><a href="#">Notification 3</a></li>
								<li><a href="#">Notification 4</a></li>
								<li><a href="#">Another notification</a></li>
							</ul>
						</li>
						<li>
							<a href="">
								<i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
							</a>
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="">
								<p>Account</p>
							</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<p>
									Dropdown
									<b class="caret"></b>
								</p>

							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
						<li>
							<a href="#">
								<p>Log out</p>
							</a>
						</li>
						<li class="separator hidden-lg hidden-md"></li>
					</ul>
				</div>
			</div>
		</nav>

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
								<button class="btn btn-susscec"><a href="{{route('product-create')}}">Create Product</a></button>
								<table class="table table-hover table-striped">
									<thead>
										<th>ID</th>
										<th>Name</th>
										<th>Price</th>
										<th>Sale</th>
										<th>Description</th>
										<th>Category Id</th>
										<th>Image</th>
										<th>Action</th>
									</thead>
									<tbody>
										@foreach($product as $item)
										<tr>
											<td>{{$item->id}}</td>
											<td>{{$item->name}}</td>
											<td>{{$item->price}}</td>
											<td>{{$item->sale}}</td>
											<td>{{$item->description}}</td>
											<td>{{$item->category_id}}</td>
											<td>{{$item->image}}</td>
											<td>
												<a href="{{route('product-edit', $item->id)}}">Edit</a>
												<form action="{{route('product-delete', $item->id)}}" method="POST">
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