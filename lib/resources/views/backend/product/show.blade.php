

@extends('layout')
@section('title', 'Shop')
@section('content')
@section('css')
<link rel="stylesheet" href="{{asset('lib/public/css/flexslider.css')}}" type="text/css" media="screen" />
<link href="{{asset('lib/public/css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css' />
<!-- Owl-carousel-CSS -->
<link rel="stylesheet" type="text/css" href="{{asset('lib/public/css/jquery-ui1.css')}}">
@endsection
<div class="banner_top innerpage" id="home">
    @include('frontend.menu')
    <div class="clearfix"></div>
    <div class="ads-grid_shop">
        <div class="shop_inner_inf">
            <div class="col-md-4 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">
                        <ul class="slides">
                            @foreach ($images as  $val)
                            <li data-thumb="{{asset('lib/public/images')}}/{{$val['name']}}">
                                <div class="thumb-image"> <img src="http://localhost:81/fashionTT/public/images/<?=$val['name']?>" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            @endforeach
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 single-right-left simpleCart_shelfItem">
                @foreach($product as $item)
                <h3><?=$item['name']?></h3>
                <p><span class="item_price">$<?=$item['price']?></span>
                    <del>$<?=$item['sale']?></del>
                </p>
                <div class="rating1">
                    <ul class="stars">
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="row">
                    <div>
                        <button type="button" class="btn btn-primary"><a style="color: white" href="{{Route('image-create', $item->id)}}">Thêm Ảnh</a></button>
                    </div>
                    <div>
                        <form action="{{route('product-delete', $item->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button   type="button" class="btn btn-danger">Xóa Sản Phẩm</button>
                        </form>
                    </div>
                    <div>
                        <button type="button" class="btn btn-infor"><a href="{{route('product-edit', $item->id)}}">Sửa Sản Phẩm</a></button>
                    </div>



                </div>
                <div class="occasional">
                    <h2>Description</h2>
                    <?=$item['description'] ?>
                    <div class="clearfix"> </div>
                </div>
                <div class="occasion-cart">
                    <div class="shoe single-item single_page_b">
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endforeach
<div class="clearfix"></div>
</div>

</div>
</div>
<a href="#home" id="toTop" class="scroll" style="display: block;">
    <span id="toTopHover" style="opacity: 1;"> </span>
</a>


<script type="text/javascript" src="{{asset('lib/public/js/jquery-2.1.4.min.js')}}"></script>
<script language="JavaScript">
    function setVisibility(id, visibility) {
        document.getElementById(id).style.display = visibility;
    }
</script>

<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function (event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>

<script>
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
@section('js')
<script type="text/javascript" src="{{asset('lib/public/js/bootstrap-3.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/public/js/imagezoom.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/public/js/jquery.flexslider.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/public/js/easy-responsive-tabs.js')}}"></script>
@endsection
@stop