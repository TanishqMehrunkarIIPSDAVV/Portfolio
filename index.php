<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once __DIR__."/src/vendor/autoload.php";
require_once __DIR__."/src/helpers.php";

use Framework\Router;

$router = new Router();
require_once basePath("routes.php");
$uri=parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH);
$router->route($uri);