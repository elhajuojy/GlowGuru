<?php

use core\App;
use core\Database;

$id = get('id');


$db = App::resolve(Database::class);


$product = $db->query("SELECT * FROM makeup_products WHERE product_id = :id",[
    'id' => $id
])->statement->fetch();

// dd($product);

view('ProductDetails.view',[
    'product' => $product
]);