@extends('layouts.master')
@section('title')
    Form
@stop
@section('content')

<div class="col-sm-6 col-md-4 col-md-offset-4" style="margin: 0 auto">
	<div class="panel panel-default">
		<div class="panel-body">			
			<form name="form" action="">
				{!! csrf_field() !!}
				<div class="row">
					<div class="center-block">
						<img class="profile-img" src="images/B612_20180217_181332.jpg" alt="User">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-10 col-md-offset-1 ">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input class="form-control" id="name" type="text" name="name" placeholder="Name" value="">
							</div>											
						</div>

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input class="form-control" id="email" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
							</div>											
						</div>

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input class="form-control" id="phone" type="text" name="phone" placeholder="Phone" value="" required>
							</div>											
						</div>
						
						<div class="form-group">
							<input type="submit" onclick="return validateForm()" class="btn btn-lg btn-primary btn-block" value="Submit">
						</div>
					</div>
				</div>
			</form>				
		</div>
	</div>
</div>
<script type="text/javascript" src="{{asset('js/form.js')}}"></script>
@endsection