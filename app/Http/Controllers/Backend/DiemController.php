<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Diem;
use App\Model\MonHoc;
use App\Model\Student;

class DiemController extends Controller
{
    public function index()
    {
        $entities = Diem::paginate(20);
        return view('backend.diem.index', ['entities' => $entities]);
    }

    public function create()
    {
        $listSV = Student::all();
        $listMonHoc = MonHoc::all();

        $viewData = [
            'listSV' => $listSV,
            'listMonHoc' => $listMonHoc,
        ];

        return view('backend.diem.create', $viewData);
    }

    public function store()
    {
        $diem = Diem::where(['MaMH' => request('MaMH'), 'MaSV' => request('MaSV'), 'HocKy' => request('HocKy')])->first();
        if (!empty($diem)) {
            return redirect()->back()->withInput(request()->all())->withErrors('Dữ liệu đã tồn tại');
        }
        Diem::create(request()->all());
        return backRouteSuccess(backendRouterName('diem.list'));
    }

    public function edit($id)
    {
        $entity = Diem::findOrFail($id);
        $listSV = Student::all();
        $listMonHoc = MonHoc::all();

        $viewData = [
            'listSV' => $listSV,
            'listMonHoc' => $listMonHoc,
            'entity' => $entity,
        ];

        return view('backend.diem.edit', $viewData);
    }

    public function update($id)
    {
        $diem = Diem::where(['MaMH' => request('MaMH'), 'MaSV' => request('MaSV'), 'HocKy' => request('HocKy')])->where('id', '!=', $id)->first();
        if (!empty($diem)) {
            return redirect()->back()->withInput(request()->all())->withErrors('Dữ liệu đã tồn tại');
        }
        $params = request()->all();
        unset($params['_token']);
        Diem::where('id', $id)->update($params);
        return backRouteSuccess('backend.diem.list', transMessage('update_success'));
    }

    public function destroy($id)
    {
        Diem::destroy($id);
        return backRouteSuccess('backend.diem.list');
    }
}
