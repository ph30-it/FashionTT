<h1>Hóa đơn chi tiết mua hàng</h1>
<p>Xin chào thành viên :  <b>{{$name}}</b></p>
Mã giao dịch của bạn là : {{$code}}
<p>Hóa đơn chi tiết mua hàng của bạn như sau :</p>
@foreach(session()->get('cart') as $val)
<p><b>{{$val['name']}}</b> : số lượng {{$val['qty']}}, giá : ${{$val['qty']*$val['price']}}</p>
@endforeach

