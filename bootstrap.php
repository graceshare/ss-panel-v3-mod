<?php
// Vendor Autoload
//  BASE_PATH
define('BASE_PATH', __DIR__);
define('VERSION', '20170829');

require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH . "/config/.config.php";

use App\Services\Boot;

Boot::loadEnv();
Boot::setDebug();
Boot::setVersion(VERSION);
Boot::setTimezone();
Boot::bootDb();
