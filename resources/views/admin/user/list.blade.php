@extends('admin.layouts.master')
@section('title')
    Danh sách người dùng
@stop
@section('content')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quản lý người dùng
                            <small>List</small>
                        </h1>
                    </div>
                    <div class="box-header">
                      <a href="{{ route('user.add') }}">Thêm user</a>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên user</th>
                                <th>Email</th>
                                <th>Ngày tạo</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($user as $u)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $u->id }}</td>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->email }}</td>
                                <td>{{ $u->created_at }}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('user.edit',$u->id)}}"> Edit</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('user.delete',$u->id)}}">Delete</a></td>
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