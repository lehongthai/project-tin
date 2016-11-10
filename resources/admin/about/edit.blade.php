@extends('admin.master')
@section('name', 'Thành Viên')
@section('action', 'Update')
@section('content')
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{!! route('admin.footer.postEdit') !!}" method="POST">
                        <input type="hidden" name="_token" class="form-control" value="{!! csrf_token() !!}">
                        <input type="hidden" name="id" class="form-control" value="{!! $footer->id !!}">
                        <div class="form-group">
                                <label>Nội Dung</label>
                                <textarea class="form-control" rows="3" name="content">{!! old('content', $footer->content) !!}</textarea>
                                <div style="color:red">{!! $errors->first('content') !!}</div>
                                <script type="text/javascript">ckeditor('content')</script>
                            </div>
                            <div class="form-group">
                                <label>Home Phone</label>
                                <input class="form-control" name="home_phone" placeholder="Please Enter Home Phone" style="width:40%" value="{!! old('home_phone', $footer->home_phone) !!}"  />
                                <div style="color:red">{!! $errors->first('home_phone') !!}</div>
                            </div>
                            <div class="form-group">
                                <label>Mobile Phone</label>
                                <input type="text" class="form-control" name="mobi_phone" placeholder="Please Enter Mobile Phone" style="width:40%"  value="{!! old('mobi_phone', $footer->mobi_phone) !!}" />
                                <div style="color:red">{!! $errors->first('mobi_phone') !!}</div>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Please Enter Email" value="{!! old('email', $footer->email) !!}" />
                                <div style="color:red">{!! $errors->first('email') !!}</div>
                            </div>
                            <div class="form-group">
                                <label>Skype</label>
                                <input type="text" class="form-control" name="skype" placeholder="Please Enter Skype" value="{!! old('skype', $footer->skype) !!}" />
                                <div style="color:red">{!! $errors->first('skype') !!}</div>
                            </div>
                            <div class="form-group">
                                <label>Tiwtter</label>
                                <input type="text" class="form-control" name="twitter" placeholder="Please Enter Twitter" value="{!! old('twitter', $footer->twitter) !!}"/>
                                <div style="color:red">{!! $errors->first('twitter') !!}</div>
                            </div>
                            <div class="form-group">
                                <label>FaceBook</label>
                                <input type="text" class="form-control" name="facebook" placeholder="Please Enter FaceBook" value="{!! old('facebook', $footer->facebook) !!}" />
                                <div style="color:red">{!! $errors->first('facebook') !!}</div>
                            </div>

                            <button type="submit" class="btn btn-default">Footer Update</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
@endsection