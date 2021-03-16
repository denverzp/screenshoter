<?php


namespace Screenshoter;


use Nesk\Puphpeteer\Puppeteer;

/**
 * Class App
 * @package Screenshoter
 */
class App
{
    /**
     * @param $url
     * @param $screenshot
     */
    public function handle($url, $screenshot): void
    {
        $puppeteer = new Puppeteer;

        $browser = $puppeteer->launch();

        $page = $browser->newPage();

        $page->setViewport([
            'width'  => 1920,
            'height' => 1080,
        ]);

        $page->goto($url);

        $page->screenshot([
            'path' => $screenshot
        ]);

        $browser->close();
    }
}
