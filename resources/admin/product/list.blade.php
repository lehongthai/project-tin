@extends('admin.master')
@section('name', 'Product')
@section('action', 'List')
@section('content')
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Name</th>
                                 <th>Danh Mục</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $index => $product)
                            <tr class="odd gradeX" align="center">
                                <td>{!! $index + 1 !!}</td>
                                <td>{!! $product['pName'] !!}
                                <img src="{!! $product['image_thumb'] !!}" class="img-responsive" alt="{!! $product['pName'] !!}">
                                </td>
                                 <td>{!! $product['cName'] !!}
                                <td><?php echo number_format($product['price']) ?></td>
                                <td>
                                    <?php
                                        echo \Carbon\Carbon::createFromTimeStamp(strtotime($product['created_at']))->diffForHumans();
                                    ?>
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm_delete('Bạn chắc chắn xóa !')" href="{!! route('admin.product.getDelete', $product['id']) !!}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! route('admin.product.getEdit', $product['id']) !!}">Edit</a></td>
                            </tr>
                        @endforeach()
                        </tbody>
                    </table>
@endsection