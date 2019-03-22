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
					<div class="content table-responsive table-full-width">
						<button class="btn btn-susscec"><a href="{{route('product-list')}}">List Product</a></button>
						<table class="table table-hover table-striped">
							<thead>
								<th>ID</th>
								<th>Content</th>
								<th>User Id</th>
								<th>Product Id</th>
								<th>Create At</th>
								<th>Action</th>
							</thead>
							<tbody>
								@foreach($cmt as $item)
								<tr>
									<td>{{$item->id}}</td>
									<td>{{$item->content}}</td>
									<td>{{$item->user_id}}</td>
									<td>{{$item->product_id}}</td>
									<td>{{$item->created_at	}}</td>
									<td>
										<form action="{{route('comment-delete', $item->id)}}" method="POST">
											@csrf
											@method("DELETE")
											<button type="submid" class="btn">Delete</button>
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


			<div class="col-md-12">
				<div class="card card-plain">
					<div class="header">
						<h4 class="title">Table on Plain Background</h4>
						<p class="category">Here is a subtitle for this table</p>
					</div>
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