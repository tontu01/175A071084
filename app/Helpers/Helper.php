<?php

use App\Contracts\Facades\ChannelLog;
use App\Helpers\Supports\Url;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

if (!function_exists('getConfig')) {
    function getConfig($key, $default = '')
    {
        return config('config.' . $key, $default);
    }
}

if (!function_exists('getConfigFrontend')) {
    function getConfigFrontend($key, $default = '')
    {
        return config('config.frontend.' . $key, $default);
    }
}

if (!function_exists('getConfigBackend')) {
    function getConfigBackend($key, $default = '')
    {
        return config('config.backend.' . $key, $default);
    }
}

if (!function_exists('delFlagOn')) {
    function delFlagOn()
    {
        return getConfig('del_flag.active', 0);
    }
}

if (!function_exists('delFlagOff')) {
    function delFlagOff()
    {
        return getConfig('del_flag.disable', 1);
    }
}

if (!function_exists('getBackendPagination')) {
    function getBackendPagination($perPage = '')
    {
        $perPage = empty($perPage) ? getConfig('pagination.backend', 20) : $perPage;
        return $perPage;
    }
}

if (!function_exists('getFrontendPagination')) {
    function getFrontendPagination($perPage = '')
    {
        $perPage = empty($perPage) ? getConfig('pagination.frontend', 20) : $perPage;
        return $perPage;
    }
}

if (!function_exists('transMessage')) {
    function transMessage($key, $default = '')
    {
        return empty(trans('messages.' . $key)) ? $default : trans('messages.' . $key);
    }
}

if (!function_exists('backendRouter')) {
    /**
     * @param $routeName
     * @param array $params
     * @return mixed
     */
    function backendRouter($routeName, $params = [])
    {
        return route('backend.' . $routeName, $params);
    }
}

if (!function_exists('backendRouterName')) {
    /**
     * @param $routeName
     * @return mixed
     */
    function backendRouterName($routeName)
    {
        return 'backend.' . $routeName;
    }
}

if (!function_exists('frontendRouter')) {
    /**
     * @param $routeName
     * @param array $params
     * @return mixed
     */
    function frontendRouter($routeName, $params = [])
    {
        return route('frontend.' . $routeName, $params);
    }
}

if (!function_exists('frontendRouterName')) {
    /**
     * @param $routeName
     * @return mixed
     */
    function frontendRouterName($routeName)
    {
        return 'frontend.' . $routeName;
    }
}

/* Redirect */
if (!function_exists('backSystemError')) {
    function backSystemError($msg = '')
    {
        $msg = empty($msg) ? transMessage('system_error') : $msg;
        return redirect()->back()->with('notification_error', $msg);
    }
}

if (!function_exists('backSystemSuccess')) {
    function backSystemSuccess($msg = '')
    {
        $msg = empty($msg) ? transMessage('success') : $msg;
        return redirect()->back()->with('notification_success', $msg);
    }
}

if (!function_exists('backSuccess')) {
    function backSuccess($msg = '')
    {
        $msg = empty($msg) ? transMessage('success') : $msg;
        return redirect()->back()->with('notification_success', $msg);
    }
}

if (!function_exists('backRouteSuccess')) {
    function backRouteSuccess($routeName = '', $msg = '', $params = [])
    {
        $msg = empty($msg) ? transMessage('success') : $msg;
        return redirect()->route($routeName, $params)->with('notification_success', $msg);
    }
}

if (!function_exists('backRouteError')) {
    function backRouteError($routeName = '', $msg = '', $params = [])
    {
        $msg = empty($msg) ? transMessage('success') : $msg;
        return redirect()->route($routeName, $params)->with('notification_error', $msg);
    }
}
/* End redirect */

if (!function_exists('arrayGet')) {
    function arrayGet($array, $key, $default = null)
    {
        return Arr::get($array, $key, $default);
    }
}

if (!function_exists('arrayLast')) {
    function arrayLast($array)
    {
        return !empty($array) ? $array[count($array) - 1] : null;
    }
}

if (!function_exists('numberFormatByDot')) {

    function numberFormatByDot($value)
    {
        return number_format($value, 0, ',', '.');
    }
}

if (!function_exists('getSTTBackend')) {

    function getSTTBackend($entities, $index)
    {
        return getBackendPagination() * ($entities->currentPage() - 1) + 1 + $index;
    }
}

if (!function_exists('frontendGetSTT')) {

    function frontendGetSTT($entities, $index)
    {
        return getFrontendPagination() * ($entities->currentPage() - 1) + 1 + $index;
    }
}

if (!function_exists('getBackUrl')) {

    function getBackUrl()
    {
        return Url::getBackUrl();
    }
}

if (!function_exists('addBackUrl')) {

    function addBackUrl($routeName, $params = [])
    {
        return Url::addbackurl($routeName, $params);
    }
}

if (!function_exists('trimValuesArray')) {

    function trimValuesArray($arr = [])
    {
        return array_map('trim', $arr);
    }
}

if (!function_exists('logErrorNotFound')) {

    function logErrorNotFound($msg = '')
    {
        $msg = empty($msg) ? "Not found entity" : '';
        return Log::error($msg);;
    }
}

if (!function_exists('logError')) {

    function logError($msg = '', $params = [])
    {
        return ChannelLog::write('error', $msg, $params);
    }
}

if (!function_exists('frontendGetUserId')) {

    function frontendGetUserId()
    {
        return empty(\Auth::guard()->user()) ? '' : \Auth::guard()->user()->id;
    }
}

if (!function_exists('getCurrentUser')) {

    function getCurrentUser()
    {
        return empty(\Auth::guard()->user()) ? '' : \Auth::guard()->user();
    }
}

if (!function_exists('getCurrentUserId')) {

    function getCurrentUserId()
    {
        return empty(\Auth::guard()->user()) ? '' : \Auth::guard()->user()->id;
    }
}

if (!function_exists('toHome')) {

    function toHome()
    {
        return redirect()->route('home');
    }
}

// Auth
if (!function_exists('backendGuard')) {
    function backendGuard()
    {
        return Auth::guard('admins');
    }
}

if (!function_exists('backendCurrentUser')) {
    function backendCurrentUser()
    {
        return Auth::guard('admins')->user();
    }
}

if (!function_exists('frontendGuard')) {
    function frontendGuard()
    {
        return Auth::guard('users');
    }
}

if (!function_exists('frontendCurrentUser')) {
    function frontendCurrentUser()
    {
        return Auth::guard('users')->user();
    }
}

if (!function_exists('frontendCurrentUserId')) {
    function frontendCurrentUserId()
    {
        return frontendCurrentUser() ? frontendCurrentUser()->id : '';
    }
}

if (!function_exists('frontendIsLogin')) {
    /**
     * @return mixed
     */
    function frontendIsLogin()
    {
        return frontendGuard()->check();
    }
}

if (!function_exists('backendIsLogin')) {
    /**
     * @return mixed
     */
    function backendIsLogin()
    {
        return backendGuard()->check();
    }
}
// End auth

if (!function_exists('getSiteName')) {

    function getSiteName()
    {
        return getConfig('system.SITE_NAME');
    }
}

if (!function_exists('getSiteTitle')) {

    function getSiteTitle()
    {
        return getConfig('system.SITE_TITLE');
    }
}


if (!function_exists('getSitePhone')) {

    function getSitePhone()
    {
        return getConfig('system.SITE_PHONE');
    }
}

if (!function_exists('getSiteMetaTitle')) {

    function getSiteMetaTitle()
    {
        return getConfig('system.META_TITLE');
    }
}

if (!function_exists('getSiteMetaDescription')) {
    function getSiteMetaDescription()
    {
        return getConfig('system.META_DESCRIPTION');
    }
}

if (!function_exists('getInputOld')) {

    function getInputOld($old, $default = '')
    {
        return empty($old) ? $default : $old;
    }
}

if (!function_exists('uploadFile')) {
    function uploadFile($file, $path)
    {
        $base_folder = 'imgs/';

        //  Lấy tên file
        $name = explode('.', $file['name']);
        $file_name = explode('/', $file['name'])[count(explode('/', $file['name'])) - 1];
        $file_name_insert = str_replace(end($name), '', $file_name) . end($name);

        //  Lấy đường dẫn file
        $dir_name = $path . '/' . date('Y') . '/' . date('m') . '/' . date('d');

        //  Kiểm tra nếu mà folder chứa ảnh cho ngày hiện tại mà chưa có thì tạo mới
        if (!is_dir($base_folder . '/' . $dir_name)) {
            // Tạo thư mục của chúng tôi nếu nó không tồn tại
            mkdir($base_folder . '/' . $dir_name, 0755, true);
        }
        move_uploaded_file($file['tmp_name'], $base_folder . '/' . $dir_name . '/' . $file_name_insert);
        return $base_folder . $dir_name . '/' . $file_name_insert;
    }
}

if (!function_exists('deleteFile')) {
    function deleteFile($file)
    {
        $base_folder = 'imgs';
        $filename = $base_folder . '/' . $file;
        unlink($filename);
    }
}

if (!function_exists('getWebRoot')) {
    function getWebRoot()
    {
        if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
            isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
            $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
            $protocol = 'https://';
        } else {
            $protocol = 'http://';
        }
        $webRoot = $protocol . $_SERVER['SERVER_NAME'];
        return $webRoot;
    }
}

if (!function_exists('getLopByMaSV')) {
    function getLopByMaSV($masv)
    {
        $student = \App\Model\Student::where('MaSV', $masv)->first();
        return !empty($student) ? $student->tryGet('lop')->TenLop : '';
    }
}