@extends('frontend.layouts.main')

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

                        <!-- From search -->
                        <form method="GET" action="{{ frontendRouter('diemSV') }}" class="mb-5" id="form-search">
                            <div class="form-row">
                                <div class="col-md-2">
                                    <div class="my-select2">
                                        <select class="my-select2__select2 select2-wrapper" name="MaSV">
                                            <option selected readonly value="">--- Sinh viên ---</option>
                                            @foreach($listSV as $item)
                                                <option value="{{ arrayGet($item, 'MaSV') }}" {{ request('MaSV') == arrayGet($item, 'MaSV') ? "selected" : '' }}>{{ arrayGet($item, 'TenSV') }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="my-select2">
                                        <select class="my-select2__select2 select2-wrapper" name="MaMH">
                                            <option selected readonly value="">--- Môn học ---</option>
                                            @foreach($listMonHoc as $item)
                                                <option value="{{ arrayGet($item, 'MaMH') }}" {{ request('MaMH') == arrayGet($item, 'MaMH') ? "selected" : '' }}>{{ arrayGet($item, 'TenMH') }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="my-select2">
                                        <select class="my-select2__select2 select2-wrapper" name="MaLop">
                                            <option selected readonly value="">--- Lớp ---</option>
                                            @foreach($listLop as $item)
                                                <option value="{{ arrayGet($item, 'MaLop') }}" {{ request('MaLop') == arrayGet($item, 'MaLop') ? "selected" : '' }}>{{ arrayGet($item, 'TenLop') }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body__head card-body__filter text-center">
                                <button type="submit" class="btn btn-cyan btn-sm">Tìm kiếm</button>
                            </div>
                        </form>

                        <div class="card-body__head d-flex">
                            <h5 class="card-title">Danh sách</h5>
                        </div>

                        <div id="zero_config_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <table class="table table-striped table-bordered dataTable" role="grid">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã SV</th>
                                        <th scope="col">Tên sinh viên</th>
                                        <th scope="col">Tên lớp</th>
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
                                        <td>{{ getLopByMaSV($entity->MaSV) }}</td>
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

                            {{--<!-- Pagination -->--}}
                            {{--{{ $entities->appends(\Illuminate\Support\Facades\Input::all())->links('backend.layouts.structures._pagination')}}--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
