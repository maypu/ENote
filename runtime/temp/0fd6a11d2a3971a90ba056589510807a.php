<?php /*a:4:{s:72:"E:\wamp\www\phpStorm_Prj\EPusher\application\index\view\index\index.html";i:1580219423;s:74:"E:\wamp\www\phpStorm_Prj\EPusher\application\index\view\public\layout.html";i:1580259244;s:79:"E:\wamp\www\phpStorm_Prj\EPusher\application\index\view\.\public\headQuote.html";i:1580301655;s:80:"E:\wamp\www\phpStorm_Prj\EPusher\application\index\view\.\public\navigation.html";i:1580293286;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- 引用文件 -->
<link rel="stylesheet" href="static/dist/layui-v2.5.6/css/layui.css">
<link rel="stylesheet" href="static/css/index.css">
<link rel="stylesheet" href="static/dist/github-markdown-css/github-markdown.css">
<script src="static/dist/layui-v2.5.6/layui.js" charset="utf-8"></script>

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
                    <a href="./"><img class="header-tittle" src="static/images/logo-4.png"></a>
                    <ul class="layui-nav pull-right" lay-filter="">
                        <li class="layui-nav-item"><a href="./">首页</a></li>
                        <li class="layui-nav-item"><a href="./doc">文档</a></li>
                        <li class="layui-nav-item"><a href="./chanel">通道</a></li>
                        <li class="layui-nav-item"><a href="./apitest">测试</a></li>
                        <li class="layui-nav-item"><a href="javascript:;" id="login"><i class="layui-icon layui-icon-username"> 登录</i></a></li>
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

<script>
    layui.use(['element','jquery','layer'],function(){
        element = layui.element,$ = layui.$;

        $('#login').on('click', function () {
            //iframe层
            layer.open({
                type: 2,
                title: '登录',
                shadeClose: true,
                shade: 0.8,
                area: ['400px', '400px'],
                content: './weixin/qrcode' //iframe的url
            });
        });

    });

</script>
<!-- End 顶部导航栏 -->
    <div class="backimage">
        <div class="layui-container" style="padding-top: 10px">

            <div class="layui-card">
                <div class="layui-card-body">
                    <div class="markdown-body">
    <div id="md_contain"></div>

    <div id="">
        <p>快速接入</p>
        <p>
            <code>
                https://epusher.ebans.net/api/send/?clint_id=通道ID&title=测试消息&content=测试内容
            </code>
        </p>
        <p>登录后显示具体ID，可直接复制到浏览器访问</p>
    </div>
</div>

<script>
    layui.use(['element','jquery','layer'],function(){
        element = layui.element,$ = layui.$;

        $.get('./parse',{path: './markdown/介绍.md'},function (data) {
            $('#md_contain').html(data);
            $('.backimage').height($('.layui-card').height()+50);
        });

    });

</script>
                </div>
            </div>
        </div>
    </div>
<!--    {/include file="./public/footer" /}-->
</body>
</html>