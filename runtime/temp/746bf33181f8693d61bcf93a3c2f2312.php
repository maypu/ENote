<?php /*a:5:{s:78:"E:\wamp64\www\phpStrom_Project\EPusher\application\index\view\index\index.html";i:1571927132;s:73:"E:\wamp64\www\phpStrom_Project\EPusher\application\index\view\layout.html";i:1571927154;s:85:"E:\wamp64\www\phpStrom_Project\EPusher\application\index\view\.\public\headQuote.html";i:1571926687;s:86:"E:\wamp64\www\phpStrom_Project\EPusher\application\index\view\.\public\navigation.html";i:1571926906;s:82:"E:\wamp64\www\phpStrom_Project\EPusher\application\index\view\.\public\footer.html";i:1571927067;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- 引用文件 -->
<link rel="stylesheet" href="static/dist/layui/css/layui.css">
<link rel="stylesheet" href="static/css/index.css">
<link rel="stylesheet" href="static/dist/github-markdown-css/github-markdown.css">
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
                        <li class="layui-nav-item"><a href="./home">首页</a></li>
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
        <!--        <img class="banner" src="static/images/banner-3.png" alt="banner">-->
        <div class="layui-card">
            <div class="layui-card-body markdown-body">
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
        </div>
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
            $('.backimage').height($('.layui-card').height()+50);
        });

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
    <!-- Footer -->
<div class="layui-bg-black footer">
    &copy;&nbsp;EPusher
</div>
<!-- End Footer -->
</body>
</html>