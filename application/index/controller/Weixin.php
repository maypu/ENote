<?php
namespace app\index\controller;

use think\Controller;

class Weixin extends Auth
{
	public function index()
	{
		$res = $this->sendMessage('oZVeC1v6kuC5_nD_ODV-02-ZAPP4','测试平台','maypu','点击查看详细内容');	//调用方法
		return json($res);

	}

	function login()
    {
        //二维码请求参数结构定义
        $barcode = array(
            'expire_seconds' => 2592000,
            'action_name' => 'QR_SCENE',
            'action_info' => array(
                'scene' => array(
                    'scene_id' => 123
                ),
            ),
        );
        $QRCode = $this->generateQRCode($barcode);
        return $QRCode;
    }

    function qrcode() {
        return $this->fetch();
    }

    //推送模板信息  参数：发送给谁的openid
	function sendMessage($openid,$platform,$developer,$remark) {
		//获取全局token
		$token = $this->get_wx_token();
		$url="https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=".$token; //模板信息请求地址
		//发送的模板信息(微信要求json格式，这里为数组（方便添加变量）格式，然后转为json)
		$post_data = array(
			"touser"=>$openid, //推送给谁,openid
			"template_id"=>config('config.weixin_template_id'), //微信后台的模板信息id
			"url"=>"http://www.baidu.com", //下面为预约看房模板示例
			"data"=> array(
				"first" => array(
					"value"=>"您有新消息，请及时查看！",
					"color"=>"#000000"
				),
				"keyword1"=>array(			//发送平台
					"value"=>$platform,
					"color"=>"#2E8B57"
				),
				"keyword2"=>array(			//开发者
					"value"=>$developer,
					"color"=>"#2E8B57"
				),
				"keyword3"=> array(			//发送时间
					"value"=>date('Y-m-d H:i:s'),
					"color"=>"#2E8B57"
				),
				"remark"=> array(			//备注
					"value"=>$remark,
					"color"=>"#000000"
				),
			)
		);

		//发送数据，post方式
		$post_data = json_encode($post_data);
		$data = http_curl($url,$post_data);
		$data = json_decode($data,true); //将json数据转成数组
		return $data;
	}

	//获取模板信息-行业信息（参考，未使用）
	function getIndustry(){
		//用户同意授权后，会传过来一个code
		$token = $this->get_wx_token();
		$url = "https://api.weixin.qq.com/cgi-bin/template/get_industry?access_token=".$token;
		//请求token，get方式
		$data = http_curl($url);
		$data = json_decode($data,true); //将json数据转成数组
		return $data;
	}

	function getWechatMessage() {
        $request = input('post.');
        var_dump($request);
    }

    //通过we7生成带参数的二维码
    function generateQRCode($barcode) {
        $we7_host = config('config.we7_host');
        $url = "http://$we7_host/api/epusher.php?code=generateQRCode";
        $postdata['data'] = $barcode;
        $request = http_curl($url,http_build_query($postdata));
        $res = json_decode($request,true);
        if (!array_key_exists('ticket',$res)) return false;
        $imgUrl = 'https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket='.urlencode($res['ticket']);
        return $imgUrl;
    }


}