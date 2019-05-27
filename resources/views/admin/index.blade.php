@extends('admin.layouts.master')
@section('title')
    Trang chủ admin
@stop
@section('content')
<div id="page-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Hello
        <small>chào mừng '{{$auth->name}}' đến với trang admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Bảng User</li>
      </ol>
    </section>
</div>
@endsection