<?php
declare(strict_types=1);

namespace DesignPatterns\Proxy\Core;

class FileDownloader implements FileDownloaderInterface
{
    public function download(string $url):string
    {
        echo "Downloading a file from the Internet.</br>";
        $result = file_get_contents($url);
        return "Downloaded bytes: " . strlen($result) . "</br>";
    }

}