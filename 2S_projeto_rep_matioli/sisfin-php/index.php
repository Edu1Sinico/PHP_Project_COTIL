<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];

require 'src/routes.php';
$router->dispatch($uri);
