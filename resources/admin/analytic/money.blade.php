@extends('admin.master')
@section('name', 'Analytic')
@section('action', 'Money')
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
                                <th>Ngày Bắt Đầu</th>
                                <th>Ngày Kết Thúc</th>
                                <th>Tổng Tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($listMoney as $index => $money)
                            <tr class="odd gradeX" align="center">
                                <td>{!! $index + 1 !!}</td>
                                <td>
                                @if($start != NULL)
                                {!! $start !!}
                                @else
                                Tất cả
                                @endif
                                </td>
                                <td>
                                @if($end != NULL)
                                {!! $end !!}
                                @else
                                Tất cả
                                @endif
                                </td>
                                <td>{!! $money->money !!}</td>
                        @endforeach()
                        </tbody>
                    </table>
@endsection