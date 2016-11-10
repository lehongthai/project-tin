@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
	@if(Session::has('flash_message'))
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
	<div class="alert alert-{!! Session::get('level') !!}">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>{!! Session::get('flash_message'); !!}</strong>
	</div>
	</div>
	@endif
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Change Password</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{!! route('admin.change.password') !!}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Old Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="oldPass" value="{{ old('oldPass') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">New Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="newPass">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirm New Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="newPassConfirm">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Change Pasword
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
