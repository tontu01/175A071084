<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    protected $_repository;
    protected $_formData; // data form submit

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getRepository()
    {
        return $this->_repository;
    }

    public function setRepository($repository)
    {
        return $this->_repository = $repository;
    }

    public function setFormData($data = [])
    {
        $this->_formData = $data;
    }

    public function getFormData()
    {
        return $this->_formData;
    }


}
