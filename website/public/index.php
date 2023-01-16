<?php

use Core\App;
use Core\Database;
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


//todo : build a router class

echo "router here please";
