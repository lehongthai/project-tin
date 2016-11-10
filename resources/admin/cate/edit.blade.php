@extends('admin.master')
@section('name', 'Category')
@section('action', 'Edit')
@section('content')
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{!! route('admin.cate.getEdit') !!}" method="POST">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <input type="hidden" name="id" value="{!! $data['id'] !!}">
                            <div class="form-group">
                                <label>Category Parent</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0">Please Choose Category</option>
                                    <?php cate_parent($parent, 0, '--', $data['parent_id']) ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" value="{!! old('txtCateName', $data['name']) !!}" />
                                <div style="color:red">{!! $errors->first('txtCateName') !!}</div>
                            </div>
                            <div class="form-group">
                                <label>Category Order</label>
                                <input class="form-control" name="txtOrder" placeholder="Please Enter Category Order" value="{!! old('txtOrder', $data['order']) !!}" />
                            </div>
                            <div class="form-group">
                                <label>Category Keywords</label>
                                <input class="form-control" name="txtKeywords" placeholder="Please Enter Category Keywords" value="{!! old('txtKeywords', $data['keywords']) !!}" />
                            </div>
                            <div class="form-group">
                                <label>Category Description</label>
                                <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription', $data['description']) !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Category Status</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" checked="" type="radio">Visible
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="2" type="radio">Invisible
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Category Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
@endsection()            