@extends('admin.master')
@section('name', 'Thành Viên')
@section('action', 'Create')
@section('content')
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{!! route('admin.user.getAdd') !!}" method="POST">
                        <input type="hidden" name="_token" class="form-control" value="{!! csrf_token() !!}">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" name="txtUser" placeholder="Please Enter Username" value="{!! old('txtUser') !!}"  />
                                <div style="color:red">{!! $errors->first('txtUser') !!}</div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="txtPass" placeholder="Please Enter Password"  />
                                <div style="color:red">{!! $errors->first('txtPass') !!}</div>
                            </div>
                            <div class="form-group">
                                <label>RePassword</label>
                                <input type="password" class="form-control" name="txtRePass" placeholder="Please Enter RePassword" />
                                <div style="color:red">{!! $errors->first('txtRePass') !!}</div>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="txtEmail" placeholder="Please Enter Email" value="{!! old('txtEmail') !!}" />
                                <div style="color:red">{!! $errors->first('txtEmail') !!}</div>
                            </div>
                            <div class="form-group">
                                <label>User Level</label>
                                @if(old('rdoLevel') == 1)
                                <label class="radio-inline">
                                    <input name="rdoLevel" value="1" checked="checked" type="radio">Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoLevel" value="2" type="radio">Member
                                </label>
                                @else
                                <label class="radio-inline">
                                    <input name="rdoLevel" value="1" type="radio">Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoLevel" value="2" checked="checked" type="radio">Member
                                </label>
                                @endif
                                <div style="color:red">{!! $errors->first('rdoLevel') !!}</div>
                            </div>
                            <button type="submit" class="btn btn-default">User Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
@endsection