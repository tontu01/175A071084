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
                                          action="{{backendRouter('diem.store')}}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @include('backend.layouts.structures._error_validate')
                                        @include('backend.layouts.structures._notification')

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Sinh viên *</label>
                                                        <div class="col-md-8">
                                                            <select class="my-select2__select2 select2-wrapper" name="MaSV" required>
                                                                <option selected readonly value="">--- Vui lòng chọn ---</option>
                                                                @foreach($listSV as $item)
                                                                    <option value="{{ arrayGet($item, 'MaSV') }}"
                                                                            {{ old('MaSV') == arrayGet($item, 'MaSV') ? "selected" : '' }}>
                                                                        {{ arrayGet($item, 'TenSV') }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Môn học *</label>
                                                        <div class="col-md-8">
                                                            <select class="my-select2__select2 select2-wrapper" name="MaMH" required>
                                                                <option selected readonly value="">--- Vui lòng chọn ---</option>
                                                                @foreach($listMonHoc as $item)
                                                                    <option value="{{ arrayGet($item, 'MaMH') }}"
                                                                            {{ old('MaMH') == arrayGet($item, 'MaMH') ? "selected" : '' }}>
                                                                        {{ arrayGet($item, 'TenMH') }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Học kì *</label>
                                                        <div class="col-md-8">
                                                            <select class="my-select2__select2 select2-wrapper" name="HocKy" required>
                                                                <option value="1" {{ old('HocKy') == 1 ? "selected" : "" }}>1</option>
                                                                <option value="2" {{ old('HocKy') == 2 ? "selected" : "" }}>2</option>
                                                                <option value="Hè" {{ old('HocKy') == 'Hè' ? "selected" : "" }}>Hè</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Điểm *</label>
                                                        <div class="col-md-8">
                                                            <input type="number" min="0" max="10" class="form-control" required name="Diem" value="{{ old('Diem')  }}" placeholder="Nhập điểm">
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
