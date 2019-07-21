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

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});
Route::get('hello/:name', 'index/hello');

//认证
Route::get('auth/login/github/callback', 'auth/github_callback');
Route::get('auth/login/github', 'auth/github_login');
Route::get('auth/login/weixin', 'auth/weixin_login');

Route::get('auth/rsa', 'auth/rsa');
Route::get('auth', 'auth/index');

Route::get('base/index', 'base/index');

//微信
Route::get('weixin/send', 'weixin/index');

//Markdown
Route::get('markdown/parse', 'MarkdownParse/index');

//index
Route::get('/', 'Index/index');

//列表
Route::get('list', 'index/artList');
Route::get('list/:name', 'index/artList');

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
