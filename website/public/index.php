<?php

use Core\App;
use Dotenv\Dotenv;


session_start();

const BASE_PATH = __DIR__ . '/../';
require_once BASE_PATH . 'vendor/autoload.php';
require_once BASE_PATH . 'functions.php';

//ignore this for now its wokring right i the idea is to load the env file

$dotenv = Dotenv::createUnsafeImmutable(BASE_PATH);
$dotenv->safeload();

$config = require_once BASE_PATH . 'config.php';



dd($config);

$App = App::getInstance($config);
// dd($App);




// $App->setDatabase(dbConfig: $config['database']);


//todo : build a router class

echo "router here please";
