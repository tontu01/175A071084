<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\MonHoc;

class MonHocController extends Controller
{
    public function index()
    {
        $entities = MonHoc::all();
        return view('backend.monhoc.index', ['entities' => $entities]);
    }
}
