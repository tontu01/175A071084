@extends('backend.layouts.main')

@section('content')
<div class="content-page teacher-page">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Khóa học</h4>
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
                        </div>

                        <div id="zero_config_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <table class="table table-striped table-bordered dataTable" role="grid">
                                <thead>
                                    <tr>
                                        <th scope="col" width="100px">STT</th>
                                        <th scope="col">Mã khóa học</th>
                                        <th scope="col">Tên khóa học</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($entities as $key => $entity)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $entity->MaKhoaHoc}}</td>
                                        <td>{{ $entity->TenKhoaHoc }}</td>
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
