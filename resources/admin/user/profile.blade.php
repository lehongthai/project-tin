@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Your Profile</div>
				<div class="panel-body">

				<div class="table-responsive">
					<table class="table table-hover table-bordered">
						<thead>
							<tr>
								<th>Tên Đăng Nhập</th>
								<td>{!! $user->username !!}</td>
							</tr>
							<tr>
								<th>Email</th>
								<td>{!! $user->email !!}</td>
							</tr>
							<tr>
								<th>Quyền</th>
								@if($user->level == 1)<td> Admin </td>
								@else <td>Member</td>
								@endif
							</tr>
						</thead>
						<tbody>
							<tr>
							<th>Ngày Kích Hoạt</th>
							<td>{!! convertStringDate2String($user->created_at, 'Y-m-d H:i:s', 'd/m/Y') !!}</td>
							</tr>
						</tbody>
					</table>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
