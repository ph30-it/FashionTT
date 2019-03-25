@extends('backend.layout.master')
@section('title','Category')
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">Danh mục sản phẩm</h4>						
					</div>
					@include('errors.error')
					<div class="content table-responsive table-full-width">
						<a href="{{route('category-create')}}" class="btn btn-susscec">Create Category</a>
						<table class="table table-hover table-striped">
							<thead>
								<th>ID</th>
								<th>Name</th>
								<th>Alias</th>
								
								<th>Parent Id</th>
								<th>Action</th>
							</thead>
							<tbody>
								@foreach($category as $item)
								<tr>
									<td>{{$item->id}}</td>
									<td><a href="{{route('category-show', $item->id)}}">{{$item->name}}</a></td>
									<td>{{$item->alias}}</td>
									
									<td>{{$item->parent_id}}</td>
									<td>
										<a href="{{route('category-edit', $item->id)}}">Edit</a>
										
									</td>
									<td>
										<form action="{{route('category-delete', $item->id)}}" method="POST">
											@csrf
											@method("DELETE")
											<button type="submid" class="btn" onclick="return confirmdel()">Delete</button>
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						{{$category->links()}}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
@endsection