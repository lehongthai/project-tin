@extends('admin.master')
@section('name', 'Analytic')
@section('action', 'Sale')
@section('content')
<div class="row" style="margin-bottom:10px">
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-md-offset-2">
        <form action="" method="POST" class="form-inline" role="form">
        <input type="hidden" name="_token" id="input_token" class="form-control" value="{!! csrf_token() !!}">
            <div class="form-group">
                <label>Start</label>
                <input type="text" class="form-control" id="start" name="start" placeholder="Input field" value="{!! old('start', $start) !!}">
            </div>
        
            <div class="form-group">
                <label>End</label>
                <input type="text" class="form-control" id="end" name="end" placeholder="Input field" value="{!! old('end', $end) !!}">
            </div>
        
            <button type="submit" class="btn btn-primary">Tìm</button>
        </form>
    </div>
</div>

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example-tags">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Ảnh Thu Nhỏ</th>
                                <th>Danh Mục</th>
                                <th>Giá</th>
                                <th>Ngày</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($listSale as $index => $product)
                            <tr class="odd gradeX" align="center">
                                <td>{!! $index + 1 !!}</td>
                                <td>{!! $product->pName !!}</td>
                                <td>
                                <img src="{!! $product->image_thumb !!}" class="img-responsive" alt="{!! $product->pName !!}">
                                </td>
                                 <td>{!! $product->cName !!}
                                <td><?php echo number_format($product->price) ?></td>
                                <td>
                                    <?php
                                        echo \Carbon\Carbon::createFromTimeStamp(strtotime($product->created_at))->diffForHumans();
                                    ?>
                                </td>
                            </tr>
                        @endforeach()
                        </tbody>
                    </table>

@endsection