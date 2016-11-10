@extends('admin.master')
@section('name', 'Thành Viên')
@section('action', 'Danh Sách')
@section('content')                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Username</th>
                                <th>Level</th>
                                <th>Email</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $index => $user)
                            <tr class="odd gradeX" align="center">
                                <td>{!! $index + 1 !!}</td>
                                <td>{!! $user['username'] !!}</td>
                                <td>
                                @if($user['level'] == 1)
                                    Admin
                                @else
                                    Member
                                @endif
                                </td>
                                <td>{!! $user['email'] !!}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm_delete('Bạn chắc chắn xóa !')" href="{!! route('admin.user.getDelete', $user['id']) !!}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! route('admin.user.getEdit', $user['id']) !!}">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
@endsection