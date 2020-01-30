<?php /*a:1:{s:74:"E:\wamp\www\phpStorm_Prj\EPusher\application\index\view\weixin\qrcode.html";i:1580288822;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>二维码</title>
    <link rel="stylesheet" href="../static/dist/layui-v2.4.5/css/layui.css">
    <style>
        body {
            text-align: center;
        }
        img {
            height: 300px;
            display: none;
        }
        #loading {
            height: 300px;
        }
        #loading i {
            display: inline-block;
            font-size: 40px;
        }
        .loginSucc {
            display: none;
        }
    </style>
</head>
<body>
    <div id="loading">
        <i class="layui-icon layui-icon-loading-1 layui-anim layui-anim-rotate layui-anim-loop"></i>
    </div>
    <img id="imgQrcode" class="" src="#" alt="qrcode"></img>
    <div class="loginLoad">微信扫码登录</div>
    <div class="loginSucc"><i class="layui-icon layui-icon-auz" style="color: #5FB878"></i>微信扫码成功</div>
    <script src="../static/dist/layui-v2.4.5/layui.js" charset="utf-8"></script>
    <script>
        layui.config({
            base: '../static/dist/layui-v2.4.5/util/' //设定扩展的Layui模块的所在目录，一般用于外部模块扩展
        }).use(['jquery'],function(){
            $ = layui.$;

            $.get('./login',{},function (data) {
                $('#imgQrcode').attr('src', data);
                $("#imgQrcode").load(function(){    //图片加载完成后触发
                    $('#loading').hide();
                    $('#imgQrcode').show();
                });
            });
            setTimeout(function () {
                $('.loginLoad').hide();
                $('.loginSucc').show();
            },2000);
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