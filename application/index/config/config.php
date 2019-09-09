<?php
/**
 * Created by PhpStorm.
 * User: maypu
 * Date: 2019/1/1
 * Time: 23:12
 */

return [
    //json web token
    'jwt_token_key'   =>  'epusher_token',
    'jwt_password_key'   =>  'epusher_password',

    //RSA Key Path
    'rsa_server_private_key' => './RSA/rsa_server_private_key.pem',
    'rsa_server_public_key' => './RSA/rsa_server_public_key.pem',
    'rsa_client_private_key' => './RSA/rsa_client_private_key.pem',
    'rsa_client_public_key' => './RSA/rsa_client_public_key.pem',

    //GitHub OAuth2.0
    'github_client_id' => 'f7c9784321adfa763b30',
    'github_client_secret' => '81a3fd40c285db29b3aef7193e3c0f5d90e210e2',

    //Weixin Token
    'weixin_appID' => 'wxda207e93dab8d253',
    'weixin_appsecret' => '0c9962de526b60603bc257e4da3fa1fb',
    'weixin_template_id' => '2C2xbxhm0o8PBLEcmVusCfHLD4xsvh2_gRCoSDN6WnA',

    //we7
    'we7_host' => 'wq.ebans.net',
];