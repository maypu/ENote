<?php /*a:4:{s:76:"E:\wamp64\www\phpStrom_Project\EPusher\application\index\view\index\doc.html";i:1572185059;s:80:"E:\wamp64\www\phpStrom_Project\EPusher\application\index\view\public\layout.html";i:1572143293;s:85:"E:\wamp64\www\phpStrom_Project\EPusher\application\index\view\.\public\headQuote.html";i:1572102028;s:86:"E:\wamp64\www\phpStrom_Project\EPusher\application\index\view\.\public\navigation.html";i:1572101956;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- 引用文件 -->
<link rel="stylesheet" href="static/dist/layui-v2.4.5/css/layui.css">
<link rel="stylesheet" href="static/css/index.css">
<link rel="stylesheet" href="static/dist/github-markdown-css/github-markdown.css">
<script src="static/dist/layui-v2.4.5/layui.js" charset="utf-8"></script>

<!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
<!--[if lt IE 9]>
<script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
<script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- End 引用文件 -->

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
                        <li class="layui-nav-item"><a href="./">首页</a></li>
                        <li class="layui-nav-item"><a href="./doc">文档</a></li>
                        <li class="layui-nav-item"><a href="./chanel">通道</a></li>
                        <li class="layui-nav-item"><a href="./apitest">测试</a></li>
                        <li class="layui-nav-item"><a href="#" id="login"><i class="layui-icon layui-icon-username"> 登录</i></a></li>
                    </ul>
                </div>
                <div class = "menu layui-hide-lg layui-hide-md layui-hide-sm">
                    <a href="index"><img class="header-tittle" src="static/images/logo-4.png"></a>
                    <ul class="layui-nav pull-right" lay-filter="">
                        <li class="layui-nav-item"><a href="/found"><i class="layui-icon layui-icon-app"></i> </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End 顶部导航栏 -->
    <div class="backimage">
        <div class="layui-container" style="padding-top: 20px">
            <!-- <img class="banner" src="static/images/banner-3.png" alt="banner">-->
            <div class="layui-card">
                <div class="layui-card-body">
                    <h1>Epusher帮助文档</h1>

<div class="layui-row">
    <div class="layui-col-md3">
        111
    </div>
    <div class="layui-col-md9">
        2222
    </div>
</div>



<ul class="layui-nav layui-bg-cyan layui-nav-tree" lay-filter="test">
    <!-- 侧边导航: <ul class="layui-nav layui-nav-tree layui-nav-side"> -->
    <li class="layui-nav-item layui-nav-itemed">
        <a href="javascript:;">默认展开</a>
        <dl class="layui-nav-child">
            <dd><a href="javascript:;">选项1</a></dd>
            <dd><a href="javascript:;">选项2</a></dd>
            <dd><a href="">跳转</a></dd>
        </dl>
    </li>
    <li class="layui-nav-item">
        <a href="javascript:;">解决方案</a>
        <dl class="layui-nav-child">
            <dd><a href="">移动模块</a></dd>
            <dd><a href="">后台模版</a></dd>
            <dd><a href="">电商平台</a></dd>
        </dl>
    </li>
    <li class="layui-nav-item"><a href="">产品</a></li>
    <li class="layui-nav-item"><a href="">大数据</a></li>
</ul>
                </div>
            </div>
        </div>
    </div>
<!--    {/include file="./public/footer" /}-->
</body>
</html>