<?php



session_start();

const BASE_PATH = __DIR__ . '/../';

require_once BASE_PATH . 'vendor/autoload.php';
$envPath = './';


$dotenv = Dotenv\Dotenv::createUnsafeImmutable(BASE_PATH);
$dotenv->safeload();



require BASE_PATH . "View/Home.php";
