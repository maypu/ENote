<?php /*a:5:{s:80:"E:\wamp64\www\phpStrom_Project\EPusher\application\index\view\weixin\qrcode.html";i:1570973171;s:73:"E:\wamp64\www\phpStrom_Project\EPusher\application\index\view\layout.html";i:1571927154;s:85:"E:\wamp64\www\phpStrom_Project\EPusher\application\index\view\.\public\headQuote.html";i:1571926687;s:86:"E:\wamp64\www\phpStrom_Project\EPusher\application\index\view\.\public\navigation.html";i:1571926906;s:82:"E:\wamp64\www\phpStrom_Project\EPusher\application\index\view\.\public\footer.html";i:1571927067;}*/ ?>
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
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>二维码</title>
    <link rel="stylesheet" href="../static/dist/layui/css/layui.css">
    <style>
        body{
            text-align: center;
        }
        img{
            height: 300px;
            display: none;
        }
        #loading i{
            display: inline-block;
            font-size: 40px;
        }
    </style>
</head>
<body>
    <div id="loading">
        <i class="layui-icon layui-icon-loading layui-anim-rotate layui-anim-loop"></i>
    </div>
    <img id="imgQrcode" class="" src="#" alt="qrcode"></img>
    <div>微信扫码登录</div>
    <script src="../static/dist/layui-v2.4.5/layui.js" charset="utf-8"></script>
    <script>
        layui.config({
            base: '../static/dist/layui-v2.4.5/util/' //设定扩展的Layui模块的所在目录，一般用于外部模块扩展
        }).use(['jquery'],function(){
            $ = layui.$;

            $.get('./login',{},function (data) {
                $('#imgQrcode').attr('src', data);
                $('#loading').hide();
                $('#imgQrcode').show();
            });
            let localToken = '';
            //定时判断是否扫码成功
            function isLogin() {
                $.get('./login/isLogin',{token:localToken},function (data) {
                    console.log(data);
                });
            }
        });

    </script>
</body>
</html>
    <!-- Footer -->
<div class="layui-bg-black footer">
    &copy;&nbsp;EPusher
</div>
<!-- End Footer -->
</body>
</html>