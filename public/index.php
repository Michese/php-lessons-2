<?php

use \application\service\Application;

define("BASE_PATH", dirname(dirname(__FILE__)));
define("APP", BASE_PATH . DIRECTORY_SEPARATOR . "application");
define("VENDOR", BASE_PATH . DIRECTORY_SEPARATOR . "vendor");

require_once (VENDOR . DIRECTORY_SEPARATOR . "autoload.php");

//echo "Это был " . $_SERVER["REQUEST_URI"][0];

Application::get()->session()->start();
Application::get()->dispatch();