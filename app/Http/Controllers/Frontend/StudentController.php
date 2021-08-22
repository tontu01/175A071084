<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Diem;
use App\Model\Lop;
use App\Model\MonHoc;
use App\Model\Student;

class StudentController
{
    public function diem()
    {
        $listSV = Student::all();
        $listMonHoc = MonHoc::all();
        $listLop = Lop::all();

        $query = Diem::select();
        $search = trimValuesArray(request()->all());
        if (arrayGet($search, 'MaSV')) {
            $query->where('MaSV', '=',  arrayGet($search, 'MaSV'));
        }
        if (arrayGet($search, 'MaMH')) {
            $query->where('MaMH', '=',  arrayGet($search, 'MaMH'));
        }
        if (arrayGet($search, 'MaLop')) {
            $listMaSV = Student::where('MaLop', arrayGet($search, 'MaLop'))->pluck('MaSV')->toArray();
            $query->whereIn('MaSV', $listMaSV);
        }
        $entities = $query->get();

        $viewData = [
            'listSV' => $listSV,
            'listMonHoc' => $listMonHoc,
            'listLop' => $listLop,
            'entities' => $entities,
        ];

        return view('frontend.student.diem', $viewData);
    }

    public function index()
    {
        $entity = frontendGuard()->user();
        return view('frontend.student.index', ['entity' => $entity]);
    }
}