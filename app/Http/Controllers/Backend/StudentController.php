<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Lop;
use App\Model\Student;

class StudentController extends Controller
{
    public function index()
    {
        $entities = Student::all();
        return view('backend.student.index', ['entities' => $entities]);
    }

    public function create()
    {
        $listLop = Lop::all();
        return view('backend.student.create', ['listLop' => $listLop]);
    }

    public function store()
    {
        $params = request()->all();
        if (request('MatKhau') != request('MatKhau_confirmation')) {
            return redirect()->back()->withInput($params)->withErrors('Mật khẩu xác nhận không khớp');
        }
        $entity = Student::where('MaSV', request('MaSV'))->first();
        if ($entity) {
            return redirect()->back()->withInput($params)->withErrors('Mã sinh viên đã tồn tại');
        }
//        $params['MatKhau'] = bcrypt($params['MatKhau']);
        Student::create($params);
        return backRouteSuccess(backendRouterName('student.list'));
    }

    public function edit($id)
    {
        try {
            $entity = Student::where('id', $id)->first();

            if (empty($entity)) {
                abort(404);
            }

            $listLop = Lop::all();

            $viewData = [
                'entity' => $entity,
                'listLop' => $listLop,
            ];

            return view('backend.student.edit', $viewData);
        } catch (\Exception $e) {
            logError($e);
        }
        return backSystemError();
    }

    public function update($id)
    {
        try {
            $params = request()->all();
            $entity = Student::where('id', $id)->first();
            if (empty($entity)) {
                abort(404);
            }
            $e2 = Student::where('id', '!=', $id)->where('MaSV', request('MaSV'))->pluck('MaSV')->toArray();
            if (!empty($e2)) {
                return redirect()->back()->withInput($params)->withErrors('Mã sinh viên đã tồn tại');
            }
            $params['MatKhau'] = empty($params['MatKhau']) ? $entity->MatKhau : ($params['MatKhau']);
            unset($params['_token']);
            Student::where('id', $id)->update($params);
            return backRouteSuccess('backend.student.list', transMessage('update_success'));
        } catch (\Exception $e) {
            logError($e);
        }
        return backSystemError();
    }

    public function destroy($id)
    {
        Student::where('id', $id)->delete();
        return backRouteSuccess('backend.student.list');
    }
}
