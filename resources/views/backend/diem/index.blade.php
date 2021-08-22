@extends('backend.layouts.main')

@section('content')
<div class="content-page teacher-page">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Điểm</h4>
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
                            <a href="{{backendRouter('diem.create')}}">
                                <button type="button" class="btn btn-cyan btn-sm">Thêm mới</button>
                            </a>
                        </div>

                        <div id="zero_config_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <table class="table table-striped table-bordered dataTable" role="grid">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã SV</th>
                                        <th scope="col">Tên sinh viên</th>
                                        <th scope="col">Mã môn học</th>
                                        <th scope="col">Tên môn học</th>
                                        <th scope="col">Học kì</th>
                                        <th scope="col">Điểm</th>
                                        <th scope="col">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($entities as $key => $entity)
                                    <tr>
                                        <td>{{ $entity->MaSV }}</td>
                                        <td>{{ $entity->tryGet('student')->TenSV }}</td>
                                        <td>{{ $entity->MaMH }}</td>
                                        <td>{{ $entity->tryGet('monhoc')->TenMH }}</td>
                                        <td>{{ $entity->HocKy }}</td>
                                        <td>{{ $entity->Diem }}</td>
                                        <td>
                                            <div class="comment-footer">
                                                <a href="{{ backendRouter('diem.edit', ['id' => $entity->id]) }}">
                                                    <button type="button" class="btn btn-cyan btn-xs">Sửa</button>
                                                </a>
                                                <a href="#modal_confirm_delete"
                                                   class="btn-danger btn btn-xs modal_confirm_delete rounded"
                                                   data-toggle="modal"
                                                   data-form-action="{{ backendRouter('diem.destroy', ['id' => $entity->id]) }}"
                                                >
                                                    Xóa
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <!-- Pagination -->
                            {{ $entities->appends(\Illuminate\Support\Facades\Input::all())->links('backend.layouts.structures._pagination')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
