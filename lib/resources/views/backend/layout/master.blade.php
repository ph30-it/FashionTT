<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('lib/public/admin/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{asset('lib/public/admin/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{asset('lib/public/admin/css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <script src="{{ asset('lib/public/admin/ckeditor/ckeditor.js') }}"></script>

</head>
<body>

    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="{{route('admin-profile')}}">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('category-list')}}">
                            <i class="pe-7s-user"></i>
                            <p>Categories</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('product-list')}}">
                            <i class="pe-7s-note2"></i>
                            <p>Products</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user-list')}}">
                            <i class="pe-7s-news-paper"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('order-list')}}">
                            <i class="pe-7s-news-paper"></i>
                            <p>Oreders</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('comment-list')}}">
                            <i class="pe-7s-news-paper"></i>
                            <p>Comment</p>
                        </a>
                    </li>
                    <li>
                        
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
                </div>
                <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                       <a href="">
                        <p> Hi ! {{Auth::user()->username}}</p>
                       </a>
                   </li>
               </li>
               <li>
                <a href="{{route('logout')}}">
                    <p>Log out</p>
                </a>
            </li>
            <li class="separator hidden-lg hidden-md"></li>
        </ul>
    </div>
</div>
</nav>
@yield('content')
</body>


<script type="text/javascript">
        function showSearch() {
        var x = document.getElementById("search");
        if (x.style.display === "block") {
            x.style.display = "none";
            document.getElementById('btn-show').innerHTML='<i class="fa fa-search"></i>';
        } else {
            x.style.display = "block";
            document.getElementById('btn-show').innerHTML="Hủy";
        }

    }
    function confirmdel()
    {
        if(window.confirm('Bạn chắc chắn muốn xóa')){
            event.preventdefault();
            return true;
        }
        return false;

    }
    setTimeout(function() {
        $('#status').slideUp('slow');
    }, 3000);
    
</script>
@yield('js');
</html>