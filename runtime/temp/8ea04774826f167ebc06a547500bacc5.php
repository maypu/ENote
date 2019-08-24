<?php /*a:1:{s:76:"E:\wamp\www\phpStrom_Project\EPusher\application\index\view\index\index.html";i:1566589401;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="static/dist/layui/css/layui.css">
    <link rel="stylesheet" href="static/css/index.css">
    <link rel="stylesheet" href="static/dist/github-markdown-css/github-markdown.css">
</head>
<body>
    <!-- 顶部导航栏 -->
    <div class="layui-bg-black">
        <div class="layui-container">
            <div class = "layui-row">
                <div class = "layui-col-lg12">
                    <div class = "layui-hide-xs menu">
                        <a href="index"><img class="header-tittle" src="static/images/logo-4.png"></a>
                        <ul class="layui-nav pull-right" lay-filter="">
                            <li class="layui-nav-item"><a href="/home">首页</a></li>
                            <li class="layui-nav-item"><a href="/document">文档</a></li>
                            <li class="layui-nav-item"><a href="/apitest">测试</a></li>
                            <li class="layui-nav-item">
                                <a href="#" rel = "nofollow"> 登录</a>
                                <dl class="layui-nav-child"> <!-- 二级菜单 -->
                                    <dd><a href="https://www.xiaoz.me/doc/doc-imgurl/install" rel = "nofollow" target = "_blank">安装ImgURL</a></dd>
                                    <dd><a href="https://www.xiaoz.me/doc/doc-imgurl/api" rel = "nofollow" target = "_blank">ImgURL API</a></dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class = "menu layui-hide-lg layui-hide-md layui-hide-sm">
                        <ul class="layui-nav" lay-filter="">
                            <li class="layui-nav-item"><a href="/found">文档</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="backimage">
        <div class="layui-container" style="padding-top: 20px">
            <!--        <img class="banner" src="static/images/banner-3.png" alt="banner">-->
            <div class="layui-card">
                <div class="layui-card-header">卡片面板</div>
                <div class="layui-card-body markdown-body" id="md_contain">
                    卡片式面板面板通常用于非白色背景色的主体内<br>
                    从而映衬出边框投影
                </div>
            </div>
        </div>
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
        }).use(['element','jquery','menu','layer'],function(){
            element = layui.element,$ = layui.$,menu = layui.menu;

            $.get('./parse',{},function (data) {
                $('#md_contain').html(data);
            });
        });

    </script>
</body>
</html>