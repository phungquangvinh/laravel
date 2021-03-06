@extends('admin.layouts.master')
@section('title')
    Thêm slide
@stop
@section('content')

<!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Slide
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
                    <form action="admin/slide/add" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Tên</label>
                            <input class="form-control" name="name" placeholder="Nhập tên slide..." />
                        </div>

                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea id="demo" class="form-control ckeditor" name="noidung"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Link URL</label>
                            <input class="form-control" name="link" placeholder="Nhập link URL" />
                        </div>

                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <input type="file" name="image" class="form-control" />
                        </div>

                        <button type="submit" class="btn btn-default">Đăng slide</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                        <a href="{{route('slide.list')}}">Trở về trang trước</a>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
<!-- /#page-wrapper -->
@endsection