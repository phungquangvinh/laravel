@extends('admin.layouts.master')
@section('title')
    Chỉnh sửa sạp hàng
@stop
@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Chỉnh sửa
                    <small>{{ $category->name }}</small>
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
                        <label>Tên sạp hàng (loại hàng)</label>
                        <input class="form-control" name="name_category" type="text" value="{{ $category->name }}" />
                    </div>

                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea id="demo" class="form-control ckeditor" name="mota">{{ $category->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Chỉnh sửa hình ảnh</label>
                        <img width="200px" src="upload/category/{{$category->img_url}}"><br>
                        <input type="file" name="image_category" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Tình trạng</label><br>
                        <label class="radio-inline">
                            <input name="active_category" value="1"
                            @if($category->active == 1)
                                {{"checked"}}
                            @endif
                            type="radio">Sạp hàng đang bán
                        </label>
                        <label class="radio-inline">
                            <input name="active_category" value="0"
                            @if($category->active == 0)
                                {{"checked"}}
                            @endif
                            type="radio">Sạp ko hoạt động
                        </label>
                    </div>

                    <button type="submit" class="btn btn-default">Thực hiện</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <a href="{{route('category.list')}}">Trở về trang trước</a>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection