<?php
namespace app\index\controller;

use Parsedown;

class Index extends Auth
{
    public function index()
    {
//        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
		return $this->fetch();
    }
    public function parse($code = '')
    {
        $Parsedown = new Parsedown();
        //$mdFile = file_get_contents('./static/markdown/单用户通道.md');
        $mdFile = file_get_contents('./static/markdown/介绍.md');
        //$mdFile2 = file_get_contents('./static/markdown/单用户通道.md');
        return $Parsedown->text($mdFile);
	}

    public function artList($name = '')
    {
        return 'hello world,' . $name;
    }

    public function miss()
    {
        return json(
            array(
                'error' => 1,
                'message' => '请求地址错误',
                'data' => array()
            )
        );
    }
}
