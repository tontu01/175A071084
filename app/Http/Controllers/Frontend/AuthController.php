<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Student;
use Illuminate\Support\Facades\Hash;

class AuthController
{
    public function showFormLogin()
    {
        return view('frontend.auth.login');
    }

    public function postLogin()
    {
        $masv = request('MaSV');
        $password = request('password');
        $student = Student::where('MaSV', $masv)->first();
        $checkLogin = false;

        if (!empty($student)) {
            $checkLogin = $password == $student->MatKhau ? true : false;
        }

        if ($checkLogin) {
            frontendGuard()->login($student);
            return redirect()->route('frontend.student.detail');
        }

        return redirect()->back()->withErrors('Tài khoản không tồn tại')->withInput(request()->all());
    }

    public function logout()
    {
        frontendGuard()->logout();
        return redirect()->route(frontendRouterName('login'));
    }
}