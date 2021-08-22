@extends('frontend.layouts.main')

@section('content')
<div class="content-page teacher-page">
    <div class="container-fluid">
        <div class="row">
            <div class="card-body">
                <div class="card-body__head d-flex">
                    <h5 class="card-title">Thông tin sinh viên</h5>
                </div>

                <div id="zero_config_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="card">
                        <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <p><b>Mã SV:</b> {{ $entity->MaSV }}</p>
                                        </div>
                                        <div class="form-group row">
                                            <p><b>Tên SV:</b> {{ $entity->TenSV }}</p>
                                        </div>
                                        <div class="form-group row">
                                            <p><b>Giới tính:</b> {{ $entity->GioiTinh == 1 ? "Nam" : "Nữ" }}</p>
                                        </div>
                                        <div class="form-group row">
                                            <p><b>Ngày sinh:</b> {{ $entity->NgaySinh }}</p>
                                        </div>
                                        <div class="form-group row">
                                            <p><b>Quê quán:</b> {{ $entity->QueQuan }}</p>
                                        </div>
                                        <div class="form-group row">
                                            <p><b>Mã lớp:</b> {{ $entity->MaLop }}</p>
                                        </div>
                                        <div class="form-group row">
                                            <p><b>Tên lớp:</b> {{ $entity->tryGet('lop')->TenLop }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
