@extends('layouts.app')
@section('title')
    Giỏ hàng của bạn
@stop
@section('content')       
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description">Mô tả</td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                @if(count($cart))
                <tbody>
                    @foreach($cart as $item)
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="{{ asset('upload/product/'.$item->img_url) }}" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{ $item->name }}</a></h4>
                            <p>Web ID: {{ $item->id }}</p>
                        </td>
                        <td class="cart_price">
                            <p>{{ number_format($item->price)}} VNĐ</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                
                                <form method="POST" action="{{url("cart?product_id=$item->id&increment=1")}}">
                                	@csrf
                                     <input type="hidden" name="product_id" value="{{ $item->id }}">
                                    <button type="submit" class="cart_quantity_up">
                                         +
                                    </button>
                                </form>
                                <input class="cart_quantity_input" type="text" name="quantity" value="{{$item->qty}}" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href="{{url("cart?product_id=$item->id&decrease=1")}}"> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">{{ number_format($item->subtotal)}} VNĐ</p>
                        </td>t
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <!-- <a class="cart_quantity_up" href='{{url("cart?product_id=$item->id&increment=1")}}'> + </a>
<a class="cart_quantity_down" href='{{url("cart?product_id=$item->id&decrease=1")}}'> - </a> -->
                    @endforeach
                </tbody>
                @else
                	<p>Bạn không có mặt hàng nào trong giỏ.</p> 
                @endif
            </table>
        </div>
    </div>
    <a href="{{ route('donhang.list') }}"></a>
</section> <!--/#cart_items-->

@endsection