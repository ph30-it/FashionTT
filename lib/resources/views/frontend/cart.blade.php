	<div class="shoecart shoecart2 cart cart box_1">
		<div id="staplesbmincart" style="display: inline;">
				<form method="post" class="" action="" target="">    
					<button type="button" class="sbmincart-closer" onclick="none();">×</button>    
					<?php $data=Session::get('cart');
					$tongtien=0;
					?>					
					@if ( $data AND $data != null)

					<ul>                
						
						@foreach ($data as $key => $val)	
						<?php 
							$tongtien+=$data[$key]['price']*$data[$key]['qty']; 
						?>					
							<li class="sbmincart-item">            
								<div class="sbmincart-details-name">                
									<a class="sbmincart-name" href="http://localhost/web/frontend/shop/index#">{{$val['name']}}
									</a>                
									<ul class="sbmincart-attributes"></ul>            
								</div>            
								<div class="sbmincart-details-quantity">                
									<input class="sbmincart-quantity" disabled type="text"  value="{{$val['qty']}}" autocomplete="off">
								</div>            
								<div class="sbmincart-details-remove">                
									<button type="button" class="sbmincart-remove remove" data-sbmincart-idx="{{$val['id']}}">×</button>            
								</div>            
								<div class="sbmincart-details-price">                
									<span class="sbmincart-price">${{$val['price']}}</span>            
								</div>           

							</li>   
							@endforeach

						</ul>
						<div class="sbmincart-footer">                    
							<div class="sbmincart-subtotal"><p class="totalsub">Subtotal: ${{$tongtien}} USD</p>
							</div>            
							<a href="" class="sbmincart-submit" type="submit" data-sbmincart-alt="undefined">Check Out
							</a>            
						</div>   
						<?php else: ?> 
						<p class="sbmincart-empty-text" style="text-align: center;">Giỏ hàng trống <br>
							Let Buy Now
						</p>
						@endif 
					</form>
			</div>
			<button class="top_shoe_cart" type="button" name="submit" value="" onclick="inline();">
				<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
			</button>
		</div>


