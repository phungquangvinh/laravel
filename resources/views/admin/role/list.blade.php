@extends('admin.layouts.master')
@section('title')
    Danh sách quyền
@stop
@section('content')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quyền - Role
                            <small>List</small>
                        </h1>
                    </div>
                    <div class="box-header">
                      <a href="{{ route('role.add') }}" class="create_lop">Thêm quyền</a>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                            	<th>Số thứ tự</th>
                                <th>ID</th>
                                <th>Tên quyền</th>
                                <th>Ngày tạo</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php $a = 1; ?>
                        	@foreach($role as $r)
                            <tr class="odd gradeX" align="center">
                            	<td>{{ $a++ }}</td>
                                <td>{{ $r->id_role }}</td>
                                <td>{{ $r->role }}</td>
                                <td>{{ $r->created_at }}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('role.edit',$r->id_role)}}"> Edit</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('role.delete',$r->id_role)}}">Delete</a></td>
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