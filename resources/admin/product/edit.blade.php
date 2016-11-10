@extends('admin.master')
@section('name', 'Product')
@section('action', 'Edit')
@section('content')
<form action="{!! url('admin/product/edit') !!}" method="POST" name="editProduct">
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <input type="hidden" name="_token" id="input" class="form-control" value="{!! csrf_token() !!}">
                        <input type="hidden" name="id" class="form-control" value="{!! $data['id'] !!}">
                        <div class="form-group">
                        <?php   ?>
                                <label>Category Parent</label>
                                <select class="form-control" name="cate_id">
                                    <option value="0">Please Choose Category</option>
                                    <?php cate_parent($parent, 0, '--', old('cate_id', $data['cate_id'])) ?>
                                </select>
                                <div style="color:red">{!! $errors->first('cate_id') !!}</div>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="txtName" placeholder="Please Enter Username" value="{!! old('txtName', $data['name']) !!}" />
                                <div style="color:red">{!! $errors->first('txtName') !!}</div>
                            </div>
                            <div class="form-group">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label>Price</label>
                                <input class="form-control" name="txtPrice" placeholder="Please Enter Price" value="{!! old('txtPrice', $data['price']) !!}" />
                                <div style="color:red">{!! $errors->first('txtPrice') !!}</div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label>Price Old</label>
                                <input class="form-control" name="txtPriceOld" placeholder="Please Enter Price Old" value="{!! old('txtPriceOld', $data['price_old']) !!}" />
                                <div style="color:red">{!! $errors->first('txtPriceOld') !!}</div>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="product_select">Chọn thẻ</label><br>
                                <?php $tags = explode(',', $data['tags']) ?>
                                <select multiple id="product_select" style="width:100%" name="tags[]">
                                    @foreach($listTags as $key => $tag)
                                    @foreach($tags as $val)
                                        <option value="{!! $key !!}" @if(old('tags') == $key ||  $val == $key) selected='selected' @endif >{!! $tag !!}</option>
                                    @endforeach
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Intro</label>
                                <textarea class="form-control" rows="3" name="txtIntro">{!! old('txtIntro', $data['intro']) !!}</textarea>
                                <script type="text/javascript">ckeditor('txtIntro')</script>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" rows="3" name="txtContent">{!! old('txtContent', $data['content']) !!}</textarea>
                                <script type="text/javascript">ckeditor('txtContent')</script>
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <div class="col-xs-12 thumbnail">
                                        <img src="{!! old('fImages',$data['image']) !!}" alt="" id="avatar">
                                </div>
                               <input type="hidden" name="fImages" id="link_avatar" value="{!! old('fImages', $data['image']) !!}" >
                               <button type="button" class="btn btn-large btn-block btn-default" onclick="BrowseServer();">Chọn Ảnh</button>
                                <div style="color:red">{!! $errors->first('fImages') !!}</div>
                            </div>
                            <div class="form-group">
                                <label>Product Keywords</label>
                                <input class="form-control" name="txtKeywords" placeholder="Please Enter Product Keywords" value="{!! old('txtKeywords', $data['keywords']) !!}" />
                            </div>
                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription', $data['description']) !!}</textarea>
                                <script type="text/javascript">ckeditor('txtDescription')</script>
                            </div>
                            <div class="form-group">
                                <label>Product Status</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" checked="" type="radio">Visible
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="2" type="radio">Invisible
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Product Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4" style="padding-top:22px" id="addImage">
                        <button style="margin-bottom:10px" type="button" class="btn btn-success" onclick="return addImage();">Thêm ảnh chi tiết</button>
                        @foreach($imgDetail as $key => $img)
                        <div class="col-xs-12 thumbnail" id="thumb{!! $img['id'] !!}">
                            <img src="{!! old('detailImg[]', $img['image']) !!}" id="imgDetail{!! $key+1 !!}" idHinh = {!! $img['id'] !!} style="width:50%;height:50%">
                            <a href="javascript:void(0)" id="delImg" type="button" class="btn btn-danger btn-circle icon_del"><i class="fa fa-times"></i></a>
                            <button style="margin-top:5px" type="button" class="btn btn-large btn-block btn-default" onclick="BrowseServerDetail{!! $key+1 !!}();">Chọn Ảnh</button>
                        </div>
                        <input type="hidden" name="detailImg[]" id="detailImg{!! $key+1 !!}" class="form-control" value="{!! old('detailImg[]') !!}">
                        @endforeach 
                        
                    </div>
<form>
<script type="text/javascript">
var image = '<div class="col-xs-12 thumbnail"><img src="" id="imgDetail" style="width:50%;height:50%"><button style="margin-top:5px"  type="button" class="btn btn-large btn-block btn-default" onclick="BrowseServerDetail();">Chọn Ảnh</button></div>';
var input = '<input type="hidden" name="detailImg[]" id="detailImg" class="form-control" value="{!! old('detailImg[]') !!}">';
    function addImage() {
        $("#addImage").append(image,input);
    }
</script>
<script type="text/javascript">
    function BrowseServer()
    {
        // You can use the "CKFinder" class to render CKFinder in a page:
        var finder = new CKFinder();
        finder.basePath = '../';    // The path for the installation of CKFinder (default = "/ckfinder/").
        finder.selectActionFunction = SetFileField;
        finder.popup();
    }

    // This is a sample function which is called when a file is selected in CKFinder.
    function SetFileField( fileUrl )
    {
      document.getElementById( 'link_avatar' ).value = fileUrl;
      document.getElementById( 'avatar' ).src = document.getElementById( 'link_avatar' ).value;
    }

    function BrowseServerDetail()
    {
        // You can use the "CKFinder" class to render CKFinder in a page:
        var finder = new CKFinder();
        finder.basePath = '../';    // The path for the installation of CKFinder (default = "/ckfinder/").
        finder.selectActionFunction = SetFileFieldDetail;
        finder.popup();
    }
    function SetFileFieldDetail( fileUrl )
    {
      document.getElementById( 'detailImg' ).value = fileUrl;
      document.getElementById( 'imgDetail' ).src = document.getElementById( 'detailImg' ).value;
    }

    function BrowseServerDetail1()
    {
        // You can use the "CKFinder" class to render CKFinder in a page:
        var finder = new CKFinder();
        finder.basePath = '../';    // The path for the installation of CKFinder (default = "/ckfinder/").
        finder.selectActionFunction = SetFileFieldDetail1;
        finder.popup();
    }
    function SetFileFieldDetail1( fileUrl )
    {
      document.getElementById( 'detailImg1' ).value = fileUrl;
      document.getElementById( 'imgDetail1' ).src = document.getElementById( 'detailImg1' ).value;
    }
    function BrowseServerDetail2()
    {
        // You can use the "CKFinder" class to render CKFinder in a page:
        var finder = new CKFinder();
        finder.basePath = '../';    // The path for the installation of CKFinder (default = "/ckfinder/").
        finder.selectActionFunction = SetFileFieldDetail2;
        finder.popup();
    }
    function SetFileFieldDetail2( fileUrl )
    {
      document.getElementById( 'detailImg2' ).value = fileUrl;
      document.getElementById( 'imgDetail2' ).src = document.getElementById( 'detailImg2' ).value;
    }
    function BrowseServerDetail3()
    {
        // You can use the "CKFinder" class to render CKFinder in a page:
        var finder = new CKFinder();
        finder.basePath = '../';    // The path for the installation of CKFinder (default = "/ckfinder/").
        finder.selectActionFunction = SetFileFieldDetail3;
        finder.popup();
    }
    function SetFileFieldDetail3( fileUrl )
    {
      document.getElementById( 'detailImg3' ).value = fileUrl;
      document.getElementById( 'imgDetail3' ).src = document.getElementById( 'detailImg3' ).value;
    }

    function BrowseServerDetail4()
    {
        // You can use the "CKFinder" class to render CKFinder in a page:
        var finder = new CKFinder();
        finder.basePath = '../';    // The path for the installation of CKFinder (default = "/ckfinder/").
        finder.selectActionFunction = SetFileFieldDetail4;
        finder.popup();
    }
    function SetFileFieldDetail4( fileUrl )
    {
      document.getElementById( 'detailImg4' ).value = fileUrl;
      document.getElementById( 'imgDetail4' ).src = document.getElementById( 'detailImg4' ).value;
    }

    </script>
@endsection