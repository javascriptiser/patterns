<?php
declare(strict_types=1);


use DesignPatterns\Adapter\Adapters\FacebookAdapter;
use DesignPatterns\Adapter\Adapters\LinkedinAdapter;
use DesignPatterns\Adapter\Api\FacebookApi;
use DesignPatterns\Adapter\Api\LinkedinApi;
use DesignPatterns\Adapter\App;

$api = new LinkedinApi();
$message = "Sended by Linkedin";
$adapter = new LinkedinAdapter($api);

$app = new App($adapter, $message);
echo $app->notification->getMessage() . "</br>";

$api = new FacebookApi();
$message = "Sended by Facebook";
$adapter = new FacebookAdapter($api);

$app = new App($adapter, $message);
echo $app->notification->getMessage() . "</br>";




