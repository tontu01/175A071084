<?php

namespace App\Validators;

use App\Validators\Base\BaseValidator;

class UserValidator extends BaseValidator
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    // ========== BACKEND ==========
    public function backendValidateStoreUser($params = [])
    {
        $userId = arrayGet($params, 'user_id');

        $rules = [
            'username' => 'bail|required|max:255',
            'email' => 'bail|required|max:64|unique:user,email,' . $userId,
            'password' => 'bail|string|min:6|max:64|nullable|confirmed',
            'phone' => 'bail|nullable|unique:user,phone,' . $userId,
            'gender' => 'bail|nullable|in:1,2',
        ];

        return $this->validate($rules, $params);
    }

    public function backendValidateUpdatePassword($params = [])
    {
        $rules = [
            'password' => 'bail|string|min:6|max:64|nullable|confirmed',
        ];

        return $this->validate($rules, $params);
    }

    // ========== FRONTEND ==========
    public function frontendValidateForgotPassword($params = [ ])
    {
        $rules = [
        'email' => 'bail|required|email'
    ];

        return $this->validate($rules, $params);
    }

    public function frontendValidatePasswordRecovery($params = [])
    {
        $rules = [
            'password' => 'bail|required|string|min:6|max:64|nullable|confirmed',
        ];

        return $this->validate($rules, $params);
    }

    public function frontendValidateStoreUser($params = [], $id = '')
    {
        $rules = [
            'username' => 'bail|required|max:255',
            'email' => 'bail|required|max:64|unique:user,email,' . $id,
            'password' => 'bail|string|min:6|max:64|nullable',
            'phone' => 'bail|required|regex:/(0)[0-9]{9}/|unique:user,phone,' . $id,
            'address' => 'bail|required',
        ];

        return $this->validate($rules, $params);
    }

    public function frontendValidateChangePassword($params)
    {
        $rules = [
            'old_password' => 'required|frontend_check_password',
            'new_password' => 'bail|required|string|min:6|max:64|confirmed',
        ];

        return $this->validate($rules, $params);
    }

    public function frontendValidateUpdateAvatar($params = [])
    {
        $rules = [
            'avatar' => 'bail|nullable|mimes:jpeg,jpg,png,gif|max:1024', // 100KB, 1024kb = 1 MB
        ];

        return $this->validate($rules, $params);
    }

    public function frontendValidateStoreOrder($params = []) {
        $rules = [
            'name' => 'bail|required|max:255',
            'phone' => 'bail|required|digits:10',
            'address' => 'bail|required',
        ];

        return $this->validate($rules, $params);
    }

    protected function _setCustomAttributes()
    {
        return [
            'old_password' => 'Mật khẩu cũ',
            'new_password' => 'Mật khẩu mới',
            'avatar' => 'Ảnh đại diện',
            'phone' => 'Số điện thoại',
            'address' => 'Địa chỉ',
        ];
    }
}
