<?php
declare(strict_types=1);

namespace DesignPatterns\Proxy\Core;

class FileDownloaderProxy implements FileDownloaderInterface
{

    private FileDownloader $fileDownloader;

    /**
     * @var string[]
     */
    private array $cache = [];

    public function __construct(FileDownloader $fileDownloader)
    {
        $this->fileDownloader = $fileDownloader;
    }

    public function download(string $url): string
    {
        if (!isset($this->cache[$url])) {
            echo "CacheProxy MISS. ";
            $result = $this->fileDownloader->download($url);
            $this->cache[$url] = $result;
        } else {
            echo "CacheProxy HIT. Retrieving result from cache.\n";
        }
        return $this->cache[$url];
    }
}