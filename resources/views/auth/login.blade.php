@extends('layouts.master')
@section('title')
    Login
@stop
@section('content')
	<?php //Hiển thị thông báo lỗi?>
	@if ($errors->any())
		<div class="alert alert-danger alert-dismissible show" role="alert">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</ul>
		</div>
	@endif
	<div class="container" style="margin-bottom: 5%">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4" style="margin: 0 auto">
				<div class="panel panel-default">
					<div class="panel-body">
						<form role="form" action="{{ route('login') }}" method="POST">
							{!! csrf_field() !!}
							<fieldset>
								<div class="row">
									<div class="center-block">
										<img class="profile-img" src="images/B612_20180217_181332.jpg" alt="User">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> 
												<input class="form-control" placeholder="Email" name="email" type="text" value="{{ old('email') }}" autofocus>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
												<input class="form-control" placeholder="Password" name="password" type="password" value="">
											</div>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-lg btn-primary btn-block" value="Login">
										</div>
										<div class="login-help">
											<a href="{{ route('register') }}" >Register</a> - <a href="{{ route('forgot') }}" >Forgot password?</a>
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection