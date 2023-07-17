<?php
declare(strict_types=1);

namespace DesignPatterns\Proxy\Core;

interface FileDownloaderInterface
{
    public function download(string $url): string;
}