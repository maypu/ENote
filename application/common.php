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
	if($headers) { curl_setopt($ch,CURLOPT_HTTPHEADER,$headers); }
	if($postData){
		curl_setopt($ch,CURLOPT_POST,1);
		curl_setopt($ch,CURLOPT_POSTFIELDS, $postData);
	}
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}