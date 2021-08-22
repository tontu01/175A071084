@extends('backend.layouts.main')

@push('script')
@endpush

@section('content')
    <div class="content-page teacher-page">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Thêm mới</h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-body__head d-flex">
                                <h5 class="card-title">Thêm mới</h5>
                                <a href="{{backendRouter('student.list')}}">
                                    <button type="button" class="btn btn-cyan btn-sm">Quay lại</button>
                                </a>
                            </div>

                            <div id="zero_config_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="card">
                                    <form class="form-horizontal store-update-entity" id="form-text-area"
                                          action="{{backendRouter('student.store')}}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @include('backend.layouts.structures._error_validate')
                                        @include('backend.layouts.structures._notification')

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Mã SV *</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="MaSV" value="{{ old('MaSV')  }}"
                                                                   required placeholder="Nhập mã sinh viên">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Tên SV *</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="TenSV" value="{{ old('TenSV')  }}"
                                                                   required placeholder="Nhập tên sinh viên">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Quê Quán *</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="QueQuan" value="{{ old('QueQuan')  }}"
                                                                   required placeholder="Nhập quê quán">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Mã Lớp *</label>
                                                        <div class="col-md-8">
                                                            <select class="my-select2__select2 select2-wrapper" name="MaLop" required>
                                                                <option selected readonly value="">--- Vui lòng chọn ---</option>
                                                                @foreach($listLop as $item)
                                                                    <option value="{{ arrayGet($item, 'MaLop') }}"
                                                                            {{ old('MaLop') == arrayGet($item, 'MaLop') ? "selected" : '' }}>
                                                                        {{ arrayGet($item, 'TenLop') }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Giới tính *</label>
                                                        <div class="col-md-8">
                                                            <select class="my-select2__select2 select2-wrapper" name="GioiTinh" required>
                                                                <option value="1" {{ old('GioiTinh') == 1 ? "selected" : "" }}>Nam</option>
                                                                <option value="2" {{ old('GioiTinh') == 2 ? "selected" : "" }}>Nữ</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Ngày sinh *</label>
                                                        <div class="col-md-8">
                                                            <input type="date" class="form-control" required name="NgaySinh"
                                                                   value="{{ old('NgaySinh')  }}"
                                                                   placeholder="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Mật khẩu *</label>
                                                        <div class="col-md-8">
                                                            <input type="password" class="form-control" required name="MatKhau" placeholder="********">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Nhập lại mật khẩu *</label>
                                                        <div class="col-md-8">
                                                            <input type="password" class="form-control" required name="MatKhau_confirmation" placeholder="********">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="border-top">
                                            <div class="card-body">
                                                <button type="submit" class="btn btn-success">Gửi đi</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
