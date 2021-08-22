<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\KhoaHoc;

class KhoaHocController extends Controller
{
    public function index()
    {
        $entities = KhoaHoc::all();
        return view('backend.khoahoc.index', ['entities' => $entities]);
    }
}
