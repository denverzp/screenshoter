<?php

require_once __DIR__ . '/vendor/autoload.php';

use \Screenshoter\App;

define('APP_ROOT', __DIR__);
define('APP_SCREENSHOTS', APP_ROOT . '/screenshots');


$app = new App();

$app->handle('https://google.com.ua', APP_SCREENSHOTS . '/google.png');
