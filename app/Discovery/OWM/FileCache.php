<?php

namespace App\Discovery\OWM;


use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\AbstractCache;

class FileCache extends AbstractCache
{
    private function urlToPath($url)
    {
        $tmp = sys_get_temp_dir();
        $dir = $tmp . DIRECTORY_SEPARATOR . "OpenWeatherMapPHPAPI";
        if (!is_dir($dir)) {
            mkdir($dir);
        }
        $path = $dir . DIRECTORY_SEPARATOR . md5($url);
        return $path;
    }
    /**
     * @inheritdoc
     */
    public function isCached($url)
    {
        $path = $this->urlToPath($url);
        if (!file_exists($path) || filectime($path) + $this->seconds < time()) {
            // echo "Weather data is NOT cached!\n";
            return false;
        }
        // echo "Weather data is cached!\n";
        return true;
    }
    /**
     * @inheritdoc
     */
    public function getCached($url)
    {
        return file_get_contents($this->urlToPath($url));
    }
    /**
     * @inheritdoc
     */
    public function setCached($url, $content)
    {
        file_put_contents($this->urlToPath($url), $content);
    }
}
