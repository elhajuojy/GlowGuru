<?php

use Core\App;
use Dotenv\Dotenv;


session_start();

const BASE_PATH = __DIR__ . '/../';

require_once BASE_PATH . 'vendor/autoload.php';
require_once BASE_PATH . 'functions.php';

$dotenv = Dotenv::createUnsafeImmutable(BASE_PATH);
$dotenv->safeload();

$config = require_once BASE_PATH . 'config.php';



// dd($config);

$App = App::getInstance($config);
// dd($App);


require BASE_PATH . 'View/Home.php';

// $App->setDatabase(dbConfig: $config['database']);


//todo : build a router class