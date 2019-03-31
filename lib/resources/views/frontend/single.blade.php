@extends('layout')
@section('title', 'Details')
@section('content')
@section('css')
<link rel="stylesheet" href="{{asset('lib/public/css/flexslider.css')}}" type="text/css" media="screen" />
<link href="{{asset('lib/public/css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="{{asset('lib/public/css/star-rating.css')}}" media="all" type="text/css"/>
<link rel="stylesheet" href="{{asset('lib/public/css/themes/krajee-fa/theme.css')}}" media="all" type="text/css"/>
<link rel="stylesheet" href="{{asset('lib/public/css/themes/krajee-svg/theme.css')}}" media="all" type="text/css"/>
<link rel="stylesheet" href="{{asset('lib/public/css/themes/krajee-uni/theme.css')}}" media="all" type="text/css"/>
<link rel="stylesheet" type="text/css" href="{{asset('lib/public/css/jquery-ui1.css')}}">
<link href="{{asset('lib/public/css/styles.css')}}" rel="stylesheet" />

<link href="{{asset('lib/public/css/TimeCircles.css')}}" rel="stylesheet">  
<style>
        #chart {
            max-width: 400px;
        }
    </style>
@endsection
<div class="ads-grid_shop">
	<div class="shop_inner_inf">
		<div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb="{{asset('lib/public/images_product')}}/{{$single['image']}}">
							<div class="thumb-image"> <img src="{{asset('lib/public/images_product')}}/{{$single['image']}}" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						@foreach ($single['images'] as  $val)
						<li data-thumb="{{asset('lib/public/images_product')}}/{{$val['name']}}">
							<div class="thumb-image"> <img src="{{asset('lib/public/images_product')}}/{{$val['name']}}" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						@endforeach
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
			<h3><?=$single['name']?>
				<p><span class="item_price">${{$single['price']}}</span>
					<del>${{$single['sale']}}</del>
				</p>
				<div class="rating1">
					@if(\Auth::check())
					<input type="text" class="rating rating-loading" value="4" data-size="sm" title="">
					@else
					<a href="{{route('login')}}" title="">Đăng nhập</a> để đánh giá
					@endif

				</div>
<p>{{count($data)}} reviews.</p>
<hr style="border:3px solid #f1f1f1;margin:0px">
<div id="chart"></div>
<p>5<i  class="	glyphicon glyphicon-star" style="color:rgba(119, 93, 208, 0.85)"></i>
4<i  class="	glyphicon glyphicon-star" style="color:#fb383b"></i>
3<i  class="	glyphicon glyphicon-star" style="color:rgba(254, 176, 25, 0.85)"></i>
2<i  class="	glyphicon glyphicon-star" style="color:rgba(0, 227, 150, 0.85)"></i>
1<i  class="	glyphicon glyphicon-star" style="color:rgba(0, 143, 251, 0.85)"></i></p>
				<div class="occasional">
					<a href="#single_page" title="">Description</a>
					<div class="clearfix"> </div>
				</div>
				<div class="occasion-cart">
					<div class="shoe single-item single_page_b">
						<form action="" method="POST">
							<button type="button" name="submit" value="{{$single['id']}}" class="addProduct"					
							style="font-size: 13px;
							color: #fff;
							background: #1d1d1d;
							text-decoration: none;
							position: relative;
							border: none;
							border-radius: 0;
							text-transform: uppercase;
							padding: .7em 1em;
							outline: none;
							letter-spacing: 1px;
							font-weight: 600;
						}">
					Add to cart</button>	

				</form>


			</div>

		</div>
		<ul class="social-nav model-3d-0 footer-social social single_page">
			<li class="share">Share On : </li>
			<li>
				<a href="#" class="facebook">
					<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
					<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
				</a>
			</li>
			<li>
				<a href="#" class="twitter">
					<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
					<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
				</a>
			</li>
			<li>
				<a href="#" class="instagram">
					<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
					<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
				</a>
			</li>
			<li>
				<a href="#" class="pinterest">
					<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
					<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
				</a>
			</li>
		</ul>

	</div>
	<div class="clearfix"> </div>
	<div class="responsive_tabs">
		<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			<ul class="resp-tabs-list">
				<li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab">Description</li>
				<li class="resp-tab-item" aria-controls="tab_item-1" role="tab">Commnet</li>
				<li class="resp-tab-item" aria-controls="tab_item-2" role="tab">Reviews</li>
			</ul>
			<div class="resp-tabs-container">
				<!--/tab_one-->
				<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Description</h2>
				<div class="tab1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
					<div class="single_page" id="single_page">
						<h6>{{$single['name']}}</h6>
						<p>{!!html_entity_decode($single['description'])!!}</p>
					</div>
				</div>

				<!--//tab_one-->
				<h2 class="resp-accordion" role="tab" aria-controls="tab_item-1">
					<span class="resp-arrow"></span>Reviews</h2><div class="tab2 resp-tab-content" aria-labelledby="tab_item-1">
						<div class="single_page">
							<div class="bootstrap-tab-text-grids">
								@if($comment)
								<div class="bootstrap-tab-text-grid" style="height:500px;overflow: auto">
									@foreach($comment as $k => $val)
									<?php 
									if ($val['user']['avatar']=='') {
										$val['user']['avatar']='user1.png';
									}
									?>
									<p style="background-color:#e9ebee;border-radius:10px"><img src="{{asset('lib/public/images/')}}/{{$val['user']['avatar']}}" alt="" width="50px"><b>{{$val['user']['username']}} : </b>{{$val['content']}}</p>
									<a  href="" title="{{$val['created_at']}}">{{\Carbon\Carbon::createFromTimeStamp(strtotime($val['created_at']))->diffforHumans()}}</a>
									@endforeach
									<div class="clearfix"></div>
								</div>
								@else
								<div class="bootstrap-tab-text-grid">
									<p style="font-size:20px;color:green;text-align: center;">Hãy là người đầu tiên bình luận sản phẩm này</p>
								</div>
								@endif
								<div class="add-review">
									@if(Auth::check())								
									<h4>add a comment</h4>
									<form action="{{route('comment')}}" id="formComment" method="POST">
										@csrf
										<textarea name="Message" id="message" required=""></textarea>
										<input type="submit" value="SEND">
									</form>								
									@else
									<p style="font-size:20px">Bạn cần <a href="{{route('login')}}" title="">đăng nhập</a> để bình luận</p>
									@endif
								</div>
							</div>
						</div>
					</div>
					<h2 class="resp-accordion" role="tab" aria-controls="tab_item-3"><span class="resp-arrow"></span>Description</h2>
					<div class="tab3 resp-tab-content" aria-labelledby="tab_item-3" >
						<div class="single_page" id="single_page">
							<h6>List reviews products</h6>
							<div class="reviews-here" style="height:500px;overflow: auto">
								@if($data)
									@foreach($data as $rating)
									<?php 
									if ($rating['user']['avatar']=='') {
										$rating['user']['avatar']='user1.png';
									}
									?>
									<p style="background-color:#e9ebee;border-radius:10px;margin-top: 10px">
									<img src="http://localhost/FashionTT/lib/public/images/{{$rating['user']['avatar']}}" alt="" width="50px">
									<b>{{$rating['user']['username']}} 
								@for($i=1;$i <= $rating['ratingNum'];$i++)
								<i class="glyphicon glyphicon-star" style="color: rgba(254, 176, 25, 0.85);"></i>
								@endfor						
								Đã đánh giá		
							</b>
							<a  href="" title="{{$rating['created_at']}}">{{\Carbon\Carbon::createFromTimeStamp(strtotime($rating['created_at']))->diffforHumans()}}</a>
						</p>
									@endforeach
								@endif
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="new_arrivals">
			<h3>Featured Products</h3>
			@foreach ($view as $key => $value)
			<div class="col-md-3 product-men women_two">
				<div class="product-shoe-info shoe">
					<div class="men-pro-item">
						<div class="men-thumb-item">
							<img src="{{asset('lib/public/images_product')}}/<?=$value['image']?>">
							<div class="men-cart-pro">
								<div class="inner-men-cart-pro">
									<a href="{{route('single',$value['id'])}}" class="link-product-add-cart">Quick View</a>
								</div>
							</div>
							<span class="product-new-top">New</span>
						</div>
						<div class="item-info-product">
							<h4>
								<a href=""><?=$value['name']?></a>
							</h4>
							<div class="info-product-price">
								<div class="grid_meta">
									<div class="product_price">
										<div class="grid-price ">
											<span class="money ">$<?=$value['price']?></span>
										</div>
									</div>
									<ul class="stars">
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="shoe single-item hvr-outline-out">
									<button type="button"  value="{{$value['id']}}" class="shoe-cart pshoe-cart addProduct">
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
								</div>
							</div>
							<div class="clearfix"></div>
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
		$('#formComment').on('submit', function(e) {
			var message = $('#message').val();
			var html='';
			//console.log(message);
			e.preventDefault();
			$.ajax({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				type: "POST",
				url: '{{route('comment')}}',
				data: {
					content:message,
					id:{{$single['id']}},
					_token: '{!! csrf_token() !!}'
				},
				success: function(msg) {
					//console.log(msg)
					$.each(JSON.parse(msg), function(key,value){
						if (value.user.avatar=='') {
							value.user.avatar="user1.png";
						}
						html+='<p style="background-color:#e9ebee;border-radius:10px"><img src="http://localhost/FashionTT/lib/public/images/'+value.user.avatar+'" width="50px"><b>'+value.user.username+' : </b>'+value.content+'</p><a  href="" title="'+value.created_at+'">'+moment(value.created_at).fromNow();+'</a>';
					});
					html+='<div class="clearfix"></div>';
					$('.bootstrap-tab-text-grid').html(html);
				}
			});
		});
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
<script>
	$(document).on('ready', function () {
		$('.kv-gly-star').rating({
			containerClass: 'is-star'
		});
		$('.rating,.kv-gly-star').on(
			'change', function () {
				var html='';
				var star = $(this).val();
				var id_product={{$single['id']}}
				console.log(id_product);
				$.ajax({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					type: "POST",
					url: '{{route('rating')}}',
					dataType:'html',
					data: {
						rate:star,
						id_product:id_product,
						_token: '{!! csrf_token() !!}'
					},
					success: function(msg) {
						if (msg=='rated') {
							alert('Bạn đã đánh giá sản phẩm này!');
						}else{
							alert('Cảm ơn bạn đã đánh giá '+star+' sao cho sản phẩm này!');
						}
					}
				});
			});
	});
</script>
 <script src="https://cdn.jsdelivr.net/npm/apexcharts@latest"></script>

    <script>
        var options = {
            chart: {
                height: 300,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    dataLabels: {
                        name: {
                            fontSize: '22px',
                        },
                        value: {
                            fontSize: '16px',
                        },
                        total: {
                            show: true,
                            label: 'Total',
                            formatter: function (w) {
                                // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                                return {{count($data)}}
                            }
                        }
                    }
                }
            },
            series: [
            @foreach($chart as $val)
            	{{ ($val*100)/ count($chart) }},
            @endforeach
            ],
            labels: [
            @foreach($chart as $k=> $val)
            	{{$k}} +'*',
            @endforeach
            ],
            
        }

       var chart = new ApexCharts(
            document.querySelector("#chart"),
            options
        );
        
        chart.render();

    </script>

@section('js')
<script src="https://momentjs.com/downloads/moment.min.js"></script>
<script type="text/javascript" src="{{asset('lib/public/js/bootstrap-3.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/public/js/imagezoom.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/public/js/jquery.flexslider.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/public/js/easy-responsive-tabs.js')}}"></script>

<script type="text/javascript" src="{{asset('lib/public/js/TimeCircles.js')}}"></script>
<script src="{{asset('lib/public/js/star-rating.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/public/css/themes/krajee-fa/theme.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/public/css/themes/krajee-svg/theme.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/public/css/themes/krajee-uni/theme.js')}}" type="text/javascript"></script>
@endsection
@stop