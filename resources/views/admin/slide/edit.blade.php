@extends('admin.layouts.master')
@section('title')
    Sửa slide
@stop
@section('content')

<!-- Page Connamet -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Slide
                        <small>{{$slide->name}}</small>
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
                    <form action="admin/slide/edit/{{$slide->id}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Tên</label>
                            <input class="form-control" name="name" placeholder="Nhập tên slide..." value="{{$slide->name}}" />
                        </div>

                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea id="demo" class="form-control ckeditor" name="noidung">
                                {{$slide->NoiDung}}
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label>Link URL</label>
                            <input class="form-control" name="link" placeholder="Nhập link URL" value="{{$slide->link}}" />
                        </div>

                        <div class="form-group">
                            <label>Chỉnh sửa hình ảnh</label>
                            <img width="200px" src="upload/slide/{{$slide->image}}"><br>
                            <input type="file" name="image" class="form-control" />
                        </div>

                        <button type="submit" class="btn btn-default">Sửa slide</button>
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