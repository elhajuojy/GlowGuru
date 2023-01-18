<?php

use core\App;
use core\Database;
use Dotenv\Dotenv;


session_start();

const BASE_PATH = __DIR__ . '/../';
require_once BASE_PATH . 'vendor/autoload.php';

const AppConsts  = [
    "Appname"=>"GlowGuru 💄",
    "AppDescription"=>"GlowGuru is a makeup store that sells makeup products",
];



require_once BASE_PATH . 'functions.php';

//ignore this for now its wokring right i the idea is to load the env file

$dotenv = Dotenv::createUnsafeImmutable(BASE_PATH);
$dotenv->safeload();
require base_path('bootstrap.php');


$router = new core\Router();



$routes = require_once base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method =  $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];


$router->route($uri, $method);




