<?php /*a:4:{s:77:"E:\wamp\www\phpStorm_Prj\EPusher\application\index\view\message\api_test.html";i:1580208812;s:74:"E:\wamp\www\phpStorm_Prj\EPusher\application\index\view\public\layout.html";i:1580259244;s:79:"E:\wamp\www\phpStorm_Prj\EPusher\application\index\view\.\public\headQuote.html";i:1580222641;s:80:"E:\wamp\www\phpStorm_Prj\EPusher\application\index\view\.\public\navigation.html";i:1580178246;}*/ ?>
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
                    <a href="./"><img class="header-tittle" src="static/images/logo-4.png"></a>
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
                    <div>
    <div class="layui-card">
        <div class="layui-card-body layui-bg-orange">
            卡片式面板面板通常用于非白色背景色的主体内<br>
            从而映衬出边框投影
        </div>
    </div>
    <form class="layui-form">
        <div class="layui-form-item">
            <label class="layui-form-label">测试通道</label>
            <div class="layui-input-block">
                <select name="chanel" lay-verify="required" lay-search>
                    <option value=""></option>
                    <optgroup label="单用户通道">
                        <option value="0">北京</option>
                        <option value="1">上海</option>
                        <option value="2">广州</option>
                    </optgroup>
                    <optgroup label="多用户通道">
                        <option value="3">深圳</option>
                        <option value="4">杭州</option>
                    </optgroup>
                </select>
                <div class="layui-form-mid layui-word-aux">选择发送用户所关联的通道</div>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">发送用户</label>
            <div class="layui-input-block">
                <select name="user" lay-verify="required" lay-search>
                    <option value=""></option>
                    <option value="0">北京</option>
                    <option value="1">上海</option>
                    <option value="2">广州</option>
                    <option value="3">深圳</option>
                    <option value="4">杭州</option>
                </select>
                <div class="layui-form-mid layui-word-aux">选择需要发送消息的用户</div>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">测试标题</label>
            <div class="layui-input-block">
                <input type="text" name="url"  lay-verify="required|tittle" placeholder="测试标题" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">测试内容</label>
            <div class="layui-input-block">
                <textarea name="desc" placeholder="请输入测试内容" lay-verify="description" class="layui-textarea"></textarea>
                <div class="layui-form-mid layui-word-aux">测试内容支持markdown格式</div>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn layui-btn-normal" id="submit" lay-submit lay-filter="chanelData">发送</button>
            </div>
        </div>
    </form>
</div>
<script>
    layui.use(['element','jquery','layer','form'],function(){
        let element = layui.element,$ = layui.$;
        let form = layui.form;

        form.verify({
            tittle: function (value) {
                if (value.length > 15) {
                    return '测试标题不超过15个字符啊';
                }
            },
            description: function (value) {
                if (value.length > 1000) {
                    return '测试内容不超过1000个字符';
                }
            }
        });

        //事件监听
        form.on('submit(chanelData)', function(data){
            console.log(data.field) //当前容器的全部表单字段，名值对形式：{name: value}
            return false; //阻止表单跳转。如果需要表单跳转，去掉这段即可。
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