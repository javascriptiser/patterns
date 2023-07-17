<?php
declare(strict_types=1);

namespace DesignPatterns\Facade\Core;

class YoutubeDownloaderFacade implements VideoDownloader
{
    public function downloadVideo(string $url): string
    {
        return $this->fetchVideo($url);
    }

    private function fetchVideo(string $url): string
    {
        $this->normalizeVideo();
        $this->resizeVideo();
        return "video.mp4 downloaded from $url";
    }

    private function normalizeVideo()
    {

    }

    private function resizeVideo()
    {

    }
}