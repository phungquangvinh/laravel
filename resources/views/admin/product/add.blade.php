@extends('admin.layouts.master')
@section('title')
    Thêm sản phẩm
@stop
@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm
                    <small>thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{ $err }}<br />
                        @endforeach
                    </div>
                @endif

                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{ session('thongbao') }}
                    </div> 
                @endif
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input class="form-control" name="product" type="text" placeholder="Điền tên vào..." value="" />
                    </div>

                    <div class="form-group">
                        <label>Lựa chọn sạp hàng (category)</label>
                        <select name="category">
                            @foreach($category as $c)
                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea id="demo" class="form-control ckeditor" name="description"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" name="image" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Số lượng</label>
                        <input class="form-control" name="quality" type="number" value="" min="0" />
                    </div>

                    <div class="form-group">
                        <label>Đơn giá (đơn vị: nghìn VND)</label>
                        <input class="form-control" name="price" type="number" value="" min="1" />
                    </div>

                    <div class="form-group">
                        <label>Khuyến mại (nhập số %)</label>
                        <input class="form-control" name="sale_price" type="number" value="" max="100" />
                    </div>

                    <div class="form-group">
                        <label>Tình trạng</label><br>
                        <label class="radio-inline">
                            <input name="active" value="1" checked="" type="radio">Hàng đang bán
                        </label>
                        <label class="radio-inline">
                            <input name="active" value="0" type="radio">Hết hàng
                        </label>
                    </div>

                    <button type="submit" class="btn btn-default">Thực hiện</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <a href="{{route('product.list')}}">Trở về trang trước</a>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection