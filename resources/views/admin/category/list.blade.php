@extends('admin.layouts.master')
@section('title')
    Danh sách sạp hàng - Category
@stop
@section('content')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quản lý sạp hàng
                            <small>Category</small>
                        </h1>
                    </div>
                    <div class="box-header">
                      <a href="{{ route('category.add') }}">Thêm category</a>
                    </div>

                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{ session('thongbao') }}
                        </div> 
                    @endif

                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên loại hàng</th>
                                <th>Mô tả</th>
                                <th>Hình ảnh</th>
                                <th>Tình trạng</th>
                                <th>Ngày tạo</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($category as $c)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $c->id }}</td>
                                <td>{{ $c->name }}</td>
                                <td>{!! $c->description !!}</td>
                                <td><img src="upload/category/{{$c->img_url}}" style="width: 200px"></td>
                                <td>
                                    @if($c->active == 1)
                                        {{"Có hoạt động"}}
                                    @else
                                        {{"Không hoạt động"}}
                                    @endif
                                </td>
                                <td>{{ $c->created_at }}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('category.edit',$c->id)}}"> Edit</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('category.delete',$c->id)}}">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection