<?php
declare(strict_types=1);

namespace DesignPatterns\Facade\Core;

interface VideoDownloader
{
    public function downloadVideo(string $url): string;
}