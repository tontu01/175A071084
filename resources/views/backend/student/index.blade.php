@extends('backend.layouts.main')

@section('content')
<div class="content-page teacher-page">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Sinh viên</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('backend.layouts.structures._notification')

                        <div class="card-body__head d-flex">
                            <h5 class="card-title">Danh sách</h5>
                            <a href="{{backendRouter('student.create')}}">
                                <button type="button" class="btn btn-cyan btn-sm">Thêm mới</button>
                            </a>
                        </div>

                        <div id="zero_config_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <table class="table table-striped table-bordered dataTable" role="grid">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Mã SV</th>
                                        <th scope="col">Tên sinh viên</th>
                                        <th scope="col">Mã Lớp</th>
                                        <th scope="col">Giới tính</th>
                                        <th scope="col">Quê quán</th>
                                        <th scope="col">Ngày sinh</th>
                                        <th scope="col">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($entities as $key => $entity)
                                    <tr>
                                        <td>{{ $entity->id }}</td>
                                        <td>{{ $entity->MaSV }}</td>
                                        <td>{{ $entity->TenSV }}</td>
                                        <td>{{ $entity->MaLop }}</td>
                                        <td>
                                            @if ($entity->GioiTinh == 1)
                                                <button class="btn btn-danger btn-xs">Nam</button>
                                            @else
                                                <button class="btn btn-cyan btn-xs">Nữ</button>
                                            @endif
                                        </td>
                                        <td>{{ $entity->QueQuan }}</td>
                                        <td>{{ date('d-m-Y', strtotime($entity->NgaySinh)) }}</td>
                                        <td>
                                            <div class="comment-footer">
                                                <a href="{{ backendRouter('student.edit', ['id' => $entity->id]) }}">
                                                    <button type="button" class="btn btn-cyan btn-xs">Sửa</button>
                                                </a>
                                                <a href="#modal_confirm_delete"
                                                   class="btn-danger btn btn-xs modal_confirm_delete rounded"
                                                   data-toggle="modal"
                                                   data-form-action="{{ backendRouter('student.destroy', ['id' => $entity->id]) }}"
                                                >
                                                    Xóa
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
