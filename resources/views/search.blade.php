@extends('layouts.master')
@section('title', 'Tìm kiếm')

@section('content')
<!-- Page Content -->
<div class="container">
    <div class="row">

        <?php
        	function ChangeColor($str, $key)
        	{
        		return str_replace($key, "<span style='color: red'>$key</span>", $str);
        	}
        ?>

        <div class="col-md-9 ">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#337AB7; color:white;">
                    <h4><b>Kết quả tìm kiếm cho từ: {{$key}}</b></h4>
                </div><br><br>

                @foreach($product as $tt)
	                <div class="row-item row">
	                    <div class="col-md-3">
	                        <a href="{{route('detail',['id' => $tt->id, 'TenKhongDau' => $tt->TenKhongDau])}}">
	                            <br>
	                            <img width="200px" height="200px" class="img-responsive" src="upload/product/{{$tt->img_url}}" alt="">
	                        </a>
	                    </div>

	                    <div class="col-md-9">
	                        <h3>{!! ChangeColor($tt->product, $key) !!}</h3>
	                        <p>{!! $tt->description !!}</p>
	                        <p>
                                Đơn giá: 
                                @if($tt->sale_price == 0)
                                    <b>{{ $tt->price }} VND</b>
                                @elseif($tt->sale_price != 1)
                                    <del>{{ $tt->price }} VND</del> <b style="color: red">{{ $tt->price - ($tt->price*$tt->sale_price) }} VND</b>
                                @else
                                    <del>{{ $tt->price }} VND</del> <b style="color: red">Free!</b>
                                @endif
                            </p>
	                        <a class="btn btn-primary" href="{{route('detail',['id' => $tt->id, 'TenKhongDau' => $tt->TenKhongDau])}}">Chi tiết sản phẩm<span class="glyphicon glyphicon-chevron-right"></span></a>
	                    </div>
	                    <div class="break"></div>
	                </div>
                @endforeach
                <br><br>

                <div style="text-align: center;">
	                {{ $product->appends(Request::all())->links() }}
	            </div>

            </div>
        </div> 
    </div>
</div>
<!-- end Page Content -->
@endsection