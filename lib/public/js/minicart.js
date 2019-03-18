      $(document).ready(function(){
        var searchurl= '{{route('search')}}';
        var product='';
        $('#search').on('keyup',function(){
          var search = $(this).val();
      //console.log(search);
      product ='';
      var url_image="{{asset('lib/public/images_product/')}}";
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type : 'POST',
        url : searchurl,
        data:{'search':search,_token: '{!! csrf_token() !!}'},
        success:function(result){
          $.each(JSON.parse(result), function(key,value){
            product+='<div class="col-md-4 product-men"><div class="product-shoe-info shoe"><div class="men-pro-item"><div class="men-thumb-item"><img src="'+url_image+'/'+value.image+'" alt=""><div class="men-cart-pro"><a href="{{url('single')}}'+value.id+'" class="link-product-add-cart">Quick View</a></div></div><span class="product-new-top">New</span></div><div class="item-info-product"><h4><a href="single.html">'+value.name+'</a></h4><div class="info-product-price"><div class="grid_meta"><div class="product_price"><div class="grid-price "><span class="money ">$'+value.price+'</span></div></div><ul class="stars"><li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li><li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li><li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li><li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li><li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li></ul></div><div class="shoe single-item hvr-outline-out"><button type="button"  value="'+value.id+'" class="shoe-cart pshoe-cart addProduct"><i class="fa fa-cart-plus" aria-hidden="true"></i></button></div></div><div class="clearfix"></div></div></div></div></div>';
          });
          product+='<div class="clearfix"></div>';
          //$("").hide(); 
          $('.product-sec1').html(product);
          
        }
      });
    });
      });