<?php

use core\App;
use core\Database;

$db = App::resolve(Database::class);

$products  = $db->query('SELECT * FROM makeup_products')->statement->fetchAll();



// dd($products);

view('Home', [
    'title' => 'Home',
    // 'products' => $products
]);