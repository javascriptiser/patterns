<?php
declare(strict_types=1);

namespace DesignPatterns\Proxy;

use DesignPatterns\Proxy\Core\FileDownloaderInterface;

class App
{
    public FileDownloaderInterface $fileDownloader;

    public function __construct(FileDownloaderInterface $fileDownloader)
    {
        $this->fileDownloader = $fileDownloader;
    }


}