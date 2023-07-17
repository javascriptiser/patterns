<?php
declare(strict_types=1);

namespace DesignPatterns\Facade;

use DesignPatterns\Facade\Core\VideoDownloader;

class App
{
    public VideoDownloader $downloader;

    public function __construct(VideoDownloader $downloader)
    {
        $this->downloader = $downloader;
    }
}