<?php /*a:4:{s:73:"E:\wamp\www\phpStorm_Prj\EPusher\application\index\view\chanel\index.html";i:1580301750;s:74:"E:\wamp\www\phpStorm_Prj\EPusher\application\index\view\public\layout.html";i:1580259244;s:79:"E:\wamp\www\phpStorm_Prj\EPusher\application\index\view\.\public\headQuote.html";i:1580301655;s:80:"E:\wamp\www\phpStorm_Prj\EPusher\application\index\view\.\public\navigation.html";i:1580293286;}*/ ?>
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
                    <style>
    .layui-badge{
        margin: auto 3px;
        cursor: pointer;
    }
</style>
<div>
    <button type="button" id="AddChanel" class="layui-btn layui-btn-normal">添加通道</button>
    <table class="layui-table" lay-skin="line" style="width: 100%">
        <thead>
            <tr>
                <th>通道名称</th>
                <th>服务状态</th>
                <th>创建时间</th>
                <th>操作</th>
                <th>操作</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>贤心</td>
                <td>2016-11-29</td>
                <td>人生就像是一场修行</td>
                <td>人生就像是一场修行</td>
                <td><span class="layui-badge layui-bg-green"><i class="layui-icon layui-icon-time"></i>日志记录</span></td>
                <td><span class="layui-badge layui-bg-blue"><i class="layui-icon layui-icon-edit"></i></span><span class="layui-badge"><i class="layui-icon layui-icon-delete"></i></span></td>
            </tr>
            <tr>
                <td>许闲心</td>
                <td>2016-11-28</td>
                <td>2016-11-28</td>
                <td>于千万人之中遇见你所遇见的人，于千万年之中，时间的无涯的荒野里…</td>
                <td>2016-11-28</td>
                <td>2016-11-28</td>
            </tr>
            <tr>
                <td>许闲心</td>
                <td>2016-11-28</td>
                <td>2016-11-28</td>
                <td>于千万人之中遇见你所遇见的人，于千万年之中，时间的无涯的荒野里…</td>
                <td>2016-11-28</td>
                <td>2016-11-28</td>
            </tr>
        </tbody>
    </table>
    <form class="layui-form layer-div">
        <div class="layui-form-item">
            <label class="layui-form-label">通道名称</label>
            <div class="layui-input-block">
                <input type="text" name="chanelName"  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
                <div class="layui-form-mid layui-word-aux">通道名称用于标示通道用途，或表示应用名称</div>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">通道类型</label>
            <div class="layui-input-block">
                <input type="radio" name="chanelType" value="单用户通道" title="单用户通道">
                <input type="radio" name="chanelType" value="多用户通道" title="多用户通道" checked>
                <div class="layui-form-mid layui-word-aux">单用户通道仅能给绑定的用户发消息<br>多用户通道可请求特定关注二维码用于多用户订阅</div>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">回调地址</label>
            <div class="layui-input-block">
                <input type="text" name="url"  lay-verify="required" placeholder="请输入回调地址 https://example.com/example.jsp" autocomplete="off" class="layui-input">
                <div class="layui-form-mid layui-word-aux">用户扫码后跳转的链接(会携带用户相关参数)</div>
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">通道说明</label>
            <div class="layui-input-block">
                <textarea name="desc" placeholder="请输入通道说明" class="layui-textarea"></textarea>
            </div>
        </div>
        <div class="layui-form-item" style="display: none">
            <div class="layui-input-block">
                <button class="layui-btn layui-btn-normal" id="submit" lay-submit lay-filter="chanelData">保存</button>
            </div>
        </div>
    </form>
</div>
<script>
    layui.use(['element','jquery','layer','form'],function(){
        let element = layui.element,$ = layui.$;
        let form = layui.form;

        $('#AddChanel').on('click', function () {
            //页面层
            layer.open({
                type: 1,
                title: '添加通道',
                area: ['600px', 'auto'], //宽高
                content: $('.layer-div'),
                btn: ['保存', '取消'],
                btnAlign: 'c',
                yes: function (index) {
                    $('#submit').click();
                }
            });
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