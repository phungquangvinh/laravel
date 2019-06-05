@extends('admin.layouts.master')
@section('title')
    Giải quyết đơn hàng
@stop
@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Đơn hàng của:
                    <small>{{$donhang->ten_user}} </small>
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
                <form action="" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Tên người dùng</label>
                        <input class="form-control" name="Ten" type="text" value="{{$donhang->ten_user}}" disabled="" />
                    </div>

                    <div class="form-group">
                        <label>Email người dùng</label>
                        <input class="form-control" name="email" type="email" value="{{$donhang->email_user}}" disabled="" />
                    </div>

                    <div class="form-group">
                        <label>Tổng hóa đơn</label>
                        <input class="form-control" name="total_price" type="text" value="{{$donhang->total_price}}"/>
                    </div>

                    <div class="form-group">
                        <label>Tình trạng</label><br>
                        <label class="radio-inline">
                            <input name="status" value="1" 
                            @if($donhang->status == 1)
                                {{"checked"}}
                            @endif
                            type="radio">Đã thanh toán
                        </label>
                        <label class="radio-inline">
                            <input name="status" value="0"
                            @if($donhang->status == 0)
                                {{"checked"}}
                            @endif
                            type="radio">Chưa thanh toán
                        </label>
                    </div>

                    <button type="submit" class="btn btn-default">Thực hiện</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <a href="{{route('donhang.list')}}">Trở về trang trước</a>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection