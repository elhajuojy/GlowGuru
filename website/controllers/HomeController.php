<?php

use core\App;
use core\Database;

$db = App::resolve(Database::class);

$products  = $db->query('SELECT * FROM makeup_products limit 6')->statement->fetchAll();
$bestSellingProducts  = $db->query('SELECT * FROM makeup_products limit 6 offset 6')->statement->fetchAll();



view('home.view', [
    'title' => 'Home',
    'products' => $products,
    'bestSellingProducts' => $bestSellingProducts
]);