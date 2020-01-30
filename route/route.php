<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

///认证
Route::rule('auth/login/github/callback', 'auth/github_callback');
Route::rule('auth/login/github', 'auth/github_login');
Route::rule('auth/login/weixin', 'auth/weixin_login');
Route::rule('auth/login/clint', 'auth/clint_auth');
Route::rule('auth/get/clint', 'auth/get_auth');

Route::rule('auth/rsa', 'auth/rsa');
Route::rule('auth', 'auth/index');

Route::rule('base/index', 'base/index');

//微信
Route::rule('weixin/send', 'weixin/index');
Route::rule('weixin/login', 'weixin/login');
Route::rule('weixin/qrcode', 'weixin/qrcode');

//index
Route::rule('/', 'Index/index');
Route::rule('/parse','Index/parse');

//doc
Route::rule('/doc','Index/doc');

//chanel
Route::rule('/chanel','Chanel/index');

//message
Route::rule('/send','Message/send');
Route::rule('/apitest','Message/api_test');

//Miss路由
Route::miss('index/miss');

//API路由分组
Route::group('api/v1', function () {
    Route::miss('index/miss');
});

return [

];
