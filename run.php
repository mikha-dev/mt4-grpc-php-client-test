<?php
require __DIR__ . '/vendor/autoload.php';

use MT4ManagerApi\UserServiceClient;

$client = new UserServiceClient('127.0.0.1:8842', [
    'credentials' => Grpc\ChannelCredentials::createInsecure()
]);

$request = new \MT4ManagerApi\UserInfoRequest();
$request->setLogin(37011);
$request->setToken('8e3dac16-7d9f-48af-8266-c014d2b07dcb');

$info = $client->GetInfo($request)->wait();

print_r($info);