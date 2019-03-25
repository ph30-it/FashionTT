			@if($errors->any())
			<div class="alert alert-danger" id="status" style="list-style: none">
				@foreach($errors->all() as $err)
				<li>{{$err}}</li>
				@endforeach
			</div>
			@endif


			@if(session('class'))
			<div class="alert alert-{{session('class')}}" id="status" style="list-style: none"> 
				<li>{{session('message')}}</li>
			</div>
			@endif