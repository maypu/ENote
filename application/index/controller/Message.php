<?php
namespace app\index\controller;

use think\Controller;

class Message extends Auth
{
    public function send(){
        return '';
    }

    public function api_test() {
        return $this->fetch();
    }
}