<?php
declare(strict_types=1);


use DesignPatterns\Proxy\App;
use DesignPatterns\Proxy\Core\FileDownloader;
use DesignPatterns\Proxy\Core\FileDownloaderProxy;

echo "</br>Proxy design pattern </br>";


$downloader = new FileDownloader();
$proxyDownloader = new FileDownloaderProxy($downloader);
$app = new App($proxyDownloader);

$result = $app->fileDownloader->download("https://ru.wikipedia.org/wiki/");
echo $result;

$result = $app->fileDownloader->download("https://ru.wikipedia.org/wiki/");
echo $result;

$result = $app->fileDownloader->download("https://ru.wikipedia.org/wiki/");
echo $result;

$result = $app->fileDownloader->download("https://ru.wikipedia.org/wiki/");
echo $result;