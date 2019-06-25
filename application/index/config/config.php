<?php
/**
 * Created by PhpStorm.
 * User: maypu
 * Date: 2019/1/1
 * Time: 23:12
 */

return [
    //json web token
    'jwt_token_key'   =>  'ifeeder_token',
    'jwt_password_key'   =>  'ifeeder_password',

    //RSA Key Path
    'rsa_server_private_key' => './RSA/rsa_server_private_key.pem',
    'rsa_server_public_key' => './RSA/rsa_server_public_key.pem',
    'rsa_client_private_key' => './RSA/rsa_client_private_key.pem',
    'rsa_client_public_key' => './RSA/rsa_client_public_key.pem',

	//GitHub OAuth2.0
	'github_client_id' => 'f7c9784321adfa763',
	'github_client_secret' => '81a3fd40c285db29b3aef7193e',

	//Weixin Token
	'weixin_appID' => 'wxe620e2a61682',
	'weixin_appsecret' => 'abdce9ab8a59b35cc8b0113',
	'weixin_template_id' => '2C2xbxhm0o8PBLEcmVusCfHLD4xsvh2_gRC',
];
