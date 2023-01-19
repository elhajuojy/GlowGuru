<?php 



// echo 'Create Product';
// dd($_POST);

use core\App;
use core\Database;

$data = $_POST['data'];
$form = $_POST['forms'];
$db = App::resolve(Database::class);
json_decode($data);


// dd($data[0]);

$images = $_FILES['product_images'];
$imagesdir =  [];

foreach ($images['name'] as $key => $value) {
    if ($images['error'][$key] == 0) {
        $tmp_name = $images['tmp_name'][$key];
        $name = $images['name'][$key];
        array_push($imagesdir, $name);
        move_uploaded_file($tmp_name, "assets/images/products/$name");
    }
}


// insert data to dataabse 

foreach ($data as $key => $value) {
    $db->query("INSERT INTO makeup_products (product_id,product_name,product_description,product_image,
    product_category,brand,product_price,product_quantity,product_quantity
    ) VALUES (
        :product_id,
        :product_name,
        :product_description,
        :product_image,
        :product_category,
        :brand,
        :product_price,
        :product_quantity,
    )", [
        'product_id' => $value['product_id'],
        'product_name' => $value['product_name'],
        'product_description' => $value['product_description'],
        'product_image' => $imagesdir[$key],
        'product_category' => $value['product_category'],
        'brand' => $value['brand'],
        'product_price' => $value['product_price'],
        'product_quantity' => $value['product_quantity'],
    ])->statement->execute();
}



// echo $image_dir.$imagename;
