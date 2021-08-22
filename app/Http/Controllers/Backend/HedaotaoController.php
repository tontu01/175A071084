<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\HeDaoTao;

class HedaotaoController extends Controller
{
    public function index()
    {
        $entities = HeDaoTao::all();
        return view('backend.hedaotao.index', ['entities' => $entities]);
    }
}
