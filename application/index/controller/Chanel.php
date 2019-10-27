<?php
namespace app\index\controller;

use think\Controller;

class Chanel extends Auth
{
    public function index() {
        return $this->fetch();
    }
}