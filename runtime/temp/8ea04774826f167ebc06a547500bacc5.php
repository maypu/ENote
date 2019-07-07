<?php /*a:1:{s:76:"E:\wamp\www\phpStrom_Project\EPusher\application\index\view\index\index.html";i:1562493237;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="static/dist/layui/css/layui.css">
    <link rel="stylesheet" href="static/css/index.css">
</head>
<body>
    <!-- 顶部导航栏 -->
    <div class="layui-header header">
        <div class = "layui-row">
            <div class = "layui-col-lg12">
                <div class="left-menu">
                    <a href="">
                        <div id="logo">
<!--                            <img src="static/images/logo.png" width="10%">-->
                        </div>
                    </a>
                </div>
                <div class = "layui-hide-xs menu">
                    <ul class="layui-nav" lay-filter="">
                        <span>EPusher</span>
                        <li class="layui-nav-item"><a href="/home/multiple"><i class="layui-icon layui-icon-upload"></i> 多图上传</a></li>
                        <li class="layui-nav-item"><a href="/found"><i class="layui-icon layui-icon-search"></i> 探索发现</a></li>
                        <li class="layui-nav-item"><a href="/home/log"><i class="layui-icon layui-icon-notice"></i> 更新日志</a></li>
                        <li class="layui-nav-item">
                            <a href="#" rel = "nofollow"><i class="layui-icon">&#xe705;</i> 帮助文档</a>
                            <dl class="layui-nav-child"> <!-- 二级菜单 -->
                                <dd><a href="https://www.xiaoz.me/doc/doc-imgurl/install" rel = "nofollow" target = "_blank">安装ImgURL</a></dd>
                                <dd><a href="https://www.xiaoz.me/doc/doc-imgurl/api" rel = "nofollow" target = "_blank">ImgURL API</a></dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item"><a href="https://github.com/helloxz/imgurl" target = "_blank" rel = "nofollow"><i class="layui-icon">&#xe635;</i> 源码</a></li>
                        <li class="layui-nav-item"><a href="/page/use"><i class="layui-icon">&#xe60b;</i> 关于</a></li>
                        <!-- 简单判断用户是否登录 -->
                        <li class="layui-nav-item"><a href="/admin/index"><i class="layui-icon layui-icon-console"></i> 后台管理</a></li>
                        <!-- 简单判断用户是否登录END -->
                    </ul>
                </div>
                <div class = "menu layui-hide-lg layui-hide-md layui-hide-sm">
                    <ul class="layui-nav" lay-filter="">
                        <li class="layui-nav-item"><a href="/found"><i class="layui-icon layui-icon-search"></i> 发现</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div>
        <img class="banner" src="static/images/banner-3.png" alt="banner">
    </div>
    <!-- 顶部导航栏 End -->
    <div class="layui-container">
        <div class="layui-row">

        </div>
    </div>

    <script src="static/dist/layui-v2.4.5/layui.js" charset="utf-8"></script>
    <script>
        layui.config({
            base: 'static/dist/layui-v2.4.5/util/' //设定扩展的Layui模块的所在目录，一般用于外部模块扩展
        }).use(['element','jquery','menu','blog','layer'],function(){
            element = layui.element,$ = layui.$,menu = layui.menu;


        });

    </script>
</body>
</html>