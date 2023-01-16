<?php

use core\App;
use core\Database;
use Dotenv\Dotenv;


session_start();

const BASE_PATH = __DIR__ . '/../';

require_once BASE_PATH . 'vendor/autoload.php';
require_once BASE_PATH . 'functions.php';

//ignore this for now its wokring right i the idea is to load the env file

$dotenv = Dotenv::createUnsafeImmutable(BASE_PATH);
$dotenv->safeload();

$config = require_once BASE_PATH . 'config.php';



// dd($config);

$App = App::getInstance($config);
// dd($App);



$db = new Database($config['database']);
// dd($db);

// $proudcts = $db->query('SELECT * FROM makeup_products')->statement->fetchAll();
// dd($proudcts);


// $App->setDatabase(dbConfig: $config['database']);



$router = new core\Router();

$routes = require_once BASE_PATH . 'routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method =  $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

// dd($uri);
// dd($method);

$router->route($uri, $method);
// dd($router->routes);


