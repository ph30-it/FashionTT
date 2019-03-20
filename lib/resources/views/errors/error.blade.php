			@if($errors->any())
			<div class="alert alert-danger" id="status">
				@foreach($errors->all() as $err)
				<li>{{$err}}</li>
				@endforeach
			</div>
			@endif


			@if(session('class'))
			<div class="alert alert-{{session('class')}}" id="status"> 
				<li>{{session('message')}}</li>
			</div>
			@endif