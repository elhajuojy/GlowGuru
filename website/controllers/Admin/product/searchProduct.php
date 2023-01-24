<?php

use core\App;
use core\Database;

$db = App::resolve(Database::class);


$search = $_GET['search'] ?? null;


if ($search) {
    $products = $db->query("SELECT * FROM makeup_products WHERE product_name LIKE '%$search%'")->statement->fetchAll();
    http_response_code(200);
    echo json_encode($products);
    return;
}


http_response_code(400);
echo json_encode(['message' => 'No search query found']);