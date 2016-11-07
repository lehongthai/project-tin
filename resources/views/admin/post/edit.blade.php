@extends('admin.master')
@section('name', 'Category')
@section('action', 'Edit')
@section('content')
    <div class="col-lg-7" style="padding-bottom:120px">
        <form action="{!! route('admin.post.getEdit') !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <input type="hidden" name="id" value="{!! $data['id'] !!}">
           <div class="form-group">
                <label>Tiêu đề</label>
                <input class="form-control" name="txtTitle" placeholder="Vui lòng nhập tiêu đề" value="{!! old('txtTitle', $data['title']) !!}" />
                <div style="color:red">{!! $errors->first('txtTitle') !!}</div>
            </div>
            <div class="form-group">
                <label>Ảnh hiển thị</label>
                <div class="col-xs-12 thumbnail">
                    <img src="{!! old('image_link', $data['image_link']) !!}" id="image_link">
                </div>
                <input type="hidden" name="image_link" id="link_avatar" value="{!! old('image_link', $data['image_link']) !!}" >
                <button type="button" class="btn btn-large btn-block btn-default" onclick="BrowseServer();">Chọn Ảnh</button>
                <div style="color:red">{!! $errors->first('image_link') !!}</div>
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
                <label>Giới thiệu</label>
                <textarea class="form-control" rows="3" name="txtIntro">{!! old('txtIntro', $data['intro']) !!}</textarea>
                <div style="color:red">{!! $errors->first('txtIntro') !!}</div>
            </div>
            <div class="form-group">
                <label>Keywords</label>
                <input class="form-control" name="txtKeyword" placeholder="Vui lòng nhập Keywords" value="{!! old('txtKeyword', $data['keywords']) !!}" />
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription', $data['description']) !!}</textarea>
            </div>
            <div class="form-group">
                <label>Nội Dung</label>
                <textarea class="form-control" rows="3" name="txtContent">{!! old('txtContent', $data['content']) !!}</textarea>
                <script type="text/javascript">ckeditor('txtContent')</script>
            </div>
            <button type="submit" class="btn btn-default">Edit</button>
            <button type="reset" class="btn btn-default">Reset</button>
        <form>
    </div>
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
      document.getElementById( 'image_link' ).src = document.getElementById( 'link_avatar' ).value;
    }
</script>
@endsection()            