@extends('admin.master')
@section('name', 'Thông Tin Chung')
@section('action', 'Danh Sách')
@section('content')                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Home phone</th>
                                <th>Mobi phone</th>
                                <th>Email</th>
                                <th>Tiwtter</th>
                                <th>Skype</th>
                                <th>Facebook</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($listFooter as $footer)
                            <tr class="odd gradeX" align="center">
                                <td>{!! $footer->home_phone !!}</td>
                                <td>{!! $footer->mobi_phone !!}</td>
                                <td>{!! $footer->email !!}</td>
                                <td>{!! $footer->tiwtter !!}</td>
                                <td>{!! $footer->skype !!}</td>
                                <td>{!! $footer->facebook !!}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm_delete('Bạn chắc chắn xóa !')" href="{!! route('admin.footer.getDelete', $footer->id) !!}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! route('admin.footer.getEdit', $footer->id) !!}">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
@endsection