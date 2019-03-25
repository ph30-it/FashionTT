@extends('backend.layout.master')
@section('title','Create User')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Create Product</h4>
                        @include('errors.error')
                        <a href="{{route('user-list')}}" class="btn btn-success">User List</a>
                    </div>
                    <div class="content">
                        <form action="{{ route('user-store')}}" method="POST">
                         @csrf
                         <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" id="password" >
                                </div>
                            </div>
                        </div>
                        <label>Role</label>
                        <select class="form-control" name="role_id">
                            @foreach($roleId as $key => $value)
                            <option value="{{$value}}">{{$key}}</option>
                            @endforeach
                        </select>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Avatar</label>
                                    <input type="file" class="form-control" name="avatar" id="avatar" >
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info btn-fill pull-right">Create user</button>
                        <div class="clearfix"></div>
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

@endsection