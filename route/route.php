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

//Markdown
Route::rule('markdown/parse', 'MarkdownParse/index');

//index
Route::rule('/', 'Index/index');
Route::rule('/parse','Index/parse');

//列表
Route::rule('list', 'index/artList');
Route::rule('list/:name', 'index/artList');

//Miss路由
Route::miss('index/miss');

//API路由分组
Route::group('api/v1', function () {
    Route::rule('list', 'index/artList');
    Route::rule('list/:name', 'index/artList');
    Route::miss('index/miss');
});

return [

];
