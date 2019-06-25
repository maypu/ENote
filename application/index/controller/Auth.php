<?php
namespace app\index\controller;

use think\Controller;
use \Firebase\JWT\JWT;
use ParagonIE\EasyRSA\EasyRSA;
use ParagonIE\EasyRSA\PrivateKey;
use ParagonIE\EasyRSA\PublicKey;

class Auth extends Controller
{
	protected function initialize() {
		//验证header中token有效性
		//echo '登录超时！';
		//exit();
	}

	public function github_login()
	{
		return redirect('https://github.com/login/oauth/authorize?client_id='.config('config.github_client_id').'&scope=user:email');
//		return 'https://github.com/login/oauth/authorize?client_id='.config('config.github_client_id').'&scope=user:email';
	}
	public function github_callback(){
		$code = request()->param('code');
		if (!$code) return json(response(array('errCode'=>60001, 'message'=> 'GitHub Api Response Code Fail!')));

		$url='https://github.com/login/oauth/access_token';
		$postParam = array(
			'client_id' => config('config.github_client_id'),
			'client_secret' => config('config.github_client_secret'),
			'code' => $code
		);
		$postParam = http_build_query($postParam);
		$headers = array('Accept: application/json');
		$access_token = http_curl($url, $postParam, $headers);
		if ($access_token){
			$access_token = json_decode($access_token, true);
			$headers = array('User-Agent: maypu','Accept: application/json');
			$userInfo = http_curl('https://api.github.com/user?access_token='.$access_token['access_token'], false, $headers);
			var_dump($userInfo);
		} else {
			return json(response(array('errCode'=>60002, 'message'=> 'GitHub Api Response userInfo Fail!')));
		}
	}

    public function index()
    {
        $key = config('config.jwt_token_key');
        $token = array(
            "iss" => "http://example.org",
            "aud" => "http://example.com",
            "iat" => 1356999524,
            "nbf" => 1357000000
        );
		$token = '马彦鹏';

        $jwt = JWT::encode($token, $key);
        var_dump($jwt);
        $decoded = JWT::decode($jwt, $key, array('HS256'));
        var_dump($decoded);
    }

    public function rsa() {
//        $keyPair = KeyPair::generateKeyPair(4096);
//        $secretKey = $keyPair->getPrivateKey();
//        $publicKey = $keyPair->getPublicKey();

        $secretKey = file_get_contents(config("config.rsa_server_private_key"));
        $publicKey = file_get_contents(config("config.rsa_server_public_key"));
        $secretKey = new PrivateKey($secretKey);
        $publicKey = new PublicKey($publicKey);

        print_r("<pre>".$secretKey->getKey()."</pre>");
        print_r("<pre>".$publicKey->getKey()."</pre>");

        $message = array(
            "user" => 10223,
            "type" => 1,
            "msg" => "测试数据"
        );
        $message = json_encode($message);
		$message = '34554';

        $ciphertext = EasyRSA::encrypt($message, $publicKey);
        $plaintext = EasyRSA::decrypt($ciphertext, $secretKey);

        var_dump($ciphertext);
        var_dump(json_decode($plaintext, true));
    }
}