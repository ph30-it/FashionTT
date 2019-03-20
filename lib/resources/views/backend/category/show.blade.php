@extends('backend.layout.master')
@section('title','Show')
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
						{{-- <button class="btn btn-susscec"><a href="{{route('product-create')}}">Create Product</a></button> --}}
						<table class="table table-hover table-striped">
							<thead>
								<th>ID</th>
								<th>Name</th>
								<th>Price</th>
								<th>Sale</th>
								<th>Category Id</th>
								<th>Image</th>
								<th>View</th>
								<th>Action</th>
							</thead>
							<tbody>
								@foreach($datas as $item)
								<tr>
									<td>{{$item['id']}}</td>
									<td><a href="{{route('product-show', $item['id'])}}">{{$item['name']}}</a></td>
									<td>{{$item['price']}}</td>
									<td>{{$item['sale']}}</td>
									<td>{{$item['category_id']}}</td>
									<td>{{$item['image']}}</td>
									<td>{{$item['view']}}</td>
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