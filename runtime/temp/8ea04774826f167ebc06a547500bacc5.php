<?php /*a:1:{s:76:"E:\wamp\www\phpStrom_Project\EPusher\application\index\view\index\index.html";i:1562081215;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="static/dist/layui/css/layui.css">
    <link rel="stylesheet" href="static/css/main.css">
    <style>
        .layui-nav-child{
            z-index: 1001;
        }
    </style>
</head>
<body class="lay-blog">
    <div></div>
    <div class="header">
        <div class="header-wrap">
            <h1 class="logo pull-left">
                <a href="index.html">
                    <img src="static/images/logo.png" alt="" class="logo-img">
                    <img src="static/images/logo-text.png" alt="" class="logo-text">
                </a>
            </h1>
            <!--<form class="layui-form blog-seach pull-left" action="">-->
                <!--<div class="layui-form-item blog-sewrap">-->
                    <!--<div class="layui-input-block blog-sebox">-->
                        <!--<i class="layui-icon layui-icon-search"></i>-->
                        <!--<input type="text" name="title" lay-verify="title" autocomplete="off"  class="layui-input">-->
                    <!--</div>-->
                <!--</div>-->
            <!--</form>-->
            <div class="blog-nav pull-right">
                <ul class="layui-nav pull-left">
                    <li class="layui-nav-item layui-this"><a href="index.html">首页</a></li>
                    <li class="layui-nav-item"><a href="message.html">文档</a></li>
                    <li class="layui-nav-item"><a href="about.html">价格</a></li>
                    <li class="layui-nav-item">
                        <a href="javascript:;" class="personal pull-left" ><img src="//t.cn/RCzsdCq" class="layui-nav-img">maypu</a>
                        <dl class="layui-nav-child">
                            <dd><a href="javascript:;">个人信息</a></dd>
                            <dd><a href="javascript:;">退出登录</a></dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="mobile-nav pull-right" id="mobile-nav">
                <a href="javascript:;">
                    <i class="layui-icon layui-icon-more"></i>
                </a>
            </div>
        </div>
        <ul class="pop-nav" id="pop-nav">
            <li><a href="index.html">首页</a></li>
            <li><a href="message.html">文档</a></li>
            <li><a href="about.html">价格</a></li>
            <li><a href="about.html">登录</a></li>
            <li><a href="about.html">个人信息</a></li>
            <li><a href="about.html">注销</a></li>
        </ul>
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