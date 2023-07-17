<?php
declare(strict_types=1);


use DesignPatterns\Facade\App;
use DesignPatterns\Facade\Core\YoutubeDownloaderFacade;

echo "</br>Facade design pattern </br>";

$downloaderFacade = new YoutubeDownloaderFacade();

$app = new App($downloaderFacade);

$result = $app->downloader->downloadVideo("youtube.com/test");

echo $result;