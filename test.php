<?php
use AFaYuan\ButtJoint;

$domain = 'http://shop100165.www2020043017.afayuan.com';    // 站点域名
$postData = [
    'name' => '13767048444',    // 用户名
    'password' => 'a123456'     // 密码
];
echo (new ButtJoint())->account($postData);

//$httpUrl = $domain. '/api/login/account';
//$header = array(
//    "Content-Type: application/json",
//    "Accept: application/json",
//    "X-Ca-timestamp: 1602488579",
//    "x-ca-nonce: 7a9c2925-aaf4-419b-a79a-9058b6379c13"
//);
//echo Request::postUrl($httpUrl, json_encode($postData), $header);
