<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Lop;

class LopController extends Controller
{
    public function index()
    {
        $entities = Lop::all();
        return view('backend.lop.index', ['entities' => $entities]);
    }
}
