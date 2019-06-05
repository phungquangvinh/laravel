@extends('admin.layouts.master')
@section('title')
    Danh sách đơn hàng
@stop
@section('content')
<!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Quản lý đơn hàng
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{ session('thongbao') }}
                    </div> 
                @endif
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Tên thành viên</th>
                            <th>Email</th>
                            <th>Tổng số tiền</th>
                            <th>Tình trạng</th>
                            <th>Ngày tạo</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($donhang as $dh)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $dh->id }}</td>
                            <td>{{ $dh->ten_user }}</td>
                            <td>{{ $dh->email_user }}</td>
                            <td>{{ $dh->total_price }}</td>
                            <td>
                            	@if($dh->status == 1)
                            		{{ "Đã thanh toán" }}
                            	@else {{ "Chưa thanh toán" }}
                            	@endif
                            </td>
                            <td>{{ $dh->created_at }}</td>                            
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('donhang.edit',$dh->id)}}"> Sửa</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('donhang.delete',$dh->id)}}">Xóa</a></td>                            
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