@extends('admin.layouts.master')
@section('title')
    Danh sách sản phẩm
@stop
@section('content')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quản lý sản phẩm
                            <small>List</small>
                        </h1>
                    </div>
                    <div class="box-header">
                      <a href="{{ route('product.add') }}">Thêm sản phẩm</a>
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
                                <th>Tên sản phẩm</th>
                                <th>Loại hàng</th>
                                <th>Mô tả</th>
                                <th>Hình ảnh</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Khuyến mãi (%)</th>
                                <th>Tình trạng</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($product as $p)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->product }}</td>
                                <td>{{ $p->id_category }}</td>
                                <td>{{ $p->description }}</td>
                                <td><img src="upload/product/{{$p->img_url}}" style="width: 200px"></td>
                                <td>{{ $p->quality }}</td>
                                <td>{{ $p->price }}</td>
                                <td>{{ $p->sale_price*100 }}</td>
                                <td>
                                    @if($p->active == 1)
                                        {{"Hàng đang bán"}}
                                    @else
                                        {{"Hết hàng"}}
                                    @endif
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('product.edit',$p->id)}}"> Edit</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('product.delete',$p->id)}}">Delete</a></td>
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