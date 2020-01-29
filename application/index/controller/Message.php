<?php
namespace app\index\controller;

use think\Controller;

class Message extends Auth
{
    public function send(){
		$request = request()->param();

		$clint_id = $request['clint_id'];
		$user_id = $request['user_id'];
		$title = $request['title'];
		$content = $request['content'];

		$weixin_controller = controller('Weixin');
		$res = $weixin_controller -> sendMessage($user_id,'测试平台','maypu','点击查看');
        return $res;
    }

    public function api_test() {
        return $this->fetch();
    }
}