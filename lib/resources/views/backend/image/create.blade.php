@extends('backend.layout.master')
@section('title','Create Image')
@section('content')




<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Create Product</h4>

                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                      @endif
                      @if(session('success'))
                      <div class="alert alert-success">
                          {{ session('success') }}
                      </div> 
                      @endif
                      <button type="button" class="btn btn-success"><a href="{{route('product-list')}}">Product List</a></button>
                  </div>
                  <div class="content">
                    <form action="{{ route('image-store')}}"  {{-- enctype="multipart/form-data" --}} method="POST">
                       @csrf
                       <label>Product</label>
                       <select class="form-control" name="product_id">
                        @foreach($productId as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                    <div class="input-group control-group increment" >
                        <input type="file" name="name" class="form-control">
                      <div class="input-group-btn"> 
                       {{--  <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button> --}}
                    </div>
                </div>
                {{-- <div class="clone hide">
                  <div class="control-group input-group" style="margin-top:10px">
                    <input type="file" name="name" class="form-control">
                    <div class="input-group-btn"> 
                      <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                  </div>
              </div>
          </div> --}}
          <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
      </form>
  </div>
</div>
</div>
</div>
</div>
</div>


<footer class="footer">
    <div class="container-fluid">
    </div>
</footer>

</div>
</div>
{{-- <script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });
  });
</script> --}}



@endsection