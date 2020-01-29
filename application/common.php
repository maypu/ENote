<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function generate( $length = 8 )  {
	$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
	$key = '';
	for ( $i = 0; $i < $length; $i++ )
	{
		// 这里提供两种字符获取方式
		// 第一种是使用 substr 截取$chars中的任意一位字符；
		// 第二种是取字符数组 $chars 的任意元素
		// $password .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
		if ($i==0) {$key .= $chars[ mt_rand(0, 51) ]; continue;} // 第一位为英文
		$key .= $chars[ mt_rand(0, strlen($chars) - 1) ];
	}
	return $key;
}

function response($array) {
	$default_options = array(
		'errCode' => 0,
		'message' => '请求地址错误',
		'data' => array()
	);
	return array_merge($default_options, $array);
}

function http_curl($url,$postData=false,$headers=array()){
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);      //要访问的地址
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);     //执行结果是否被返回，0返，1不返
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
	curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
	if($headers) {curl_setopt($ch,CURLOPT_HTTPHEADER,$headers); }
	if($postData){
		curl_setopt($ch,CURLOPT_POST,1);
		curl_setopt($ch,CURLOPT_POSTFIELDS, $postData);
	}
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

//获得全局微信access_token
function get_wx_token(){
    //获取session中的token
    $token = session('access_token');
    if ($token) {
        //通过接口判断session('accesss_token')是否过期
        $url = 'https://api.weixin.qq.com/cgi-bin/getcallbackip?access_token='.$token;
        $res = http_curl($url);
        $arr = json_decode($res, true); //将结果转为数组
        if (array_key_exists('ip_list', $arr)) {
            return $token;
        }
    }
    //1.请求url地址
//    $appid = config('config.weixin_appID');
//    $appsecret = config('config.weixin_appsecret');
//    $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret; //微信端请求地址
    $we7_host = config('config.we7_host');
    $Aid = config('config.we7_Aid');
    $url = "http://$we7_host/api/epusher.php?Aid=$Aid&code=getAccessToken";

    //2.curl请求
    $access_token = http_curl($url);
    session('access_token',$access_token);
    return $access_token;
}