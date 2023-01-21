<?php

use core\App;
use core\Database;

$buttonValue = "insert into database";


if(get("id")){
    $buttonValue = "update";
    $id = get('id');
    $db = App::resolve(Database::class);
    $product = $db->query("SELECT * FROM makeup_products WHERE id = :id",[
        'id' => $id
    ])->statement->fetch();
    view('Admin/product/productCreate.view', [
        'title' => 'Update Product',
        'product' => $product,
        'button' => $buttonValue
    ]);
    return;
}



view('Admin/product/productCreate.view', [
    'title' => 'insert Product',
    'button' => $buttonValue
]);
