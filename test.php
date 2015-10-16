<?php
	include "TopSdk.php";
	date_default_timezone_set('Asia/Shanghai');
    $c = new TopClient;
    $c->appkey = '23254115';
    $c->secretKey = 'fe55d5ca2248521b558492dc2cda60d9';
    $req = new AlibabaAliqinFcSmsNumSendRequest;
    //$req->setExtend("123456");
    $req->setSmsType("normal");
    $req->setSmsFreeSignName("注册验证");
    $req->setSmsParam('{"code":"123456", "product" : "touzila"}');
    $req->setRecNum("15010129801");
    $req->setSmsTemplateCode("SMS_960130");
    //$resp = $c->execute($req, $sessionKey);
    $resp = $c->execute($req);
var_dump($resp);
//	$httpdns = new HttpdnsGetRequest;
//	$client = new ClusterTopClient("appkey","appscret");
//	$client->gatewayUrl = "http://gw.api.taobao.com/router/rest";
//	var_dump($client->execute($httpdns));

