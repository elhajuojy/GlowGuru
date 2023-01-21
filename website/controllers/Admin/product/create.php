
<?php

use core\App;
use core\Database;
use core\Validator;

// if(!isAdmin()){
//     goToPage('/login');
// }


// dd($_POST);


$db = App::resolve(Database::class);


if (array_key_exists('save_multiple_data', $_POST)) {
    for ($i = 0; $i < count($_POST['product_name']); $i++) {
        $name = $_POST['product_name'][$i];
        $cateogry =  $_POST['product_category'][$i];
        $product_brand = $_POST['brand'][$i];
        $product_price = $_POST['product_price'][$i];
        $product_quantity = $_POST['product_quantity'][$i];
        $product_description = $_POST['product_description'][$i];
        $product_id = $_POST['product_id'][$i];
        $image_path = "";
        //validate
        if (Validator::string($name) && Validator::string($cateogry) && Validator::string($product_brand) && Validator::string($product_price) && Validator::string($product_quantity) && Validator::string($product_description) && Validator::string($product_id)) {
            if (isset($_FILES['product_image'])) {
                $image = $_FILES['product_image'];
                $image_dir = "assets/images/products/";
                move_uploaded_file($image['tmp_name'][$i], $image_dir . $image['name'][$i]);
                $image_path = $image_dir . $image['name'][$i];
            }
            //insert into database
            $db->query("INSERT INTO makeup_products (product_name, product_category, brand, product_price,      product_quantity, product_image,product_id,product_description) VALUES (
                :name, :category, :brand, :price, :quantity, :image,:id,:description)",
            [
                'name' => $name,
                'category' => $cateogry,
                'brand' => $product_brand,
                'price' => $product_price,
                'quantity' => $product_quantity,
                'image' => "./../".$image_path,
                'id' => $product_id,
                'description' => $product_description
            ]
        );
        }
    }
}

//update do it on other place 


view('Admin/product/productCreate.view', [
    'title' => 'Create Product',
    'button' => 'insert into database'
]);

//upload image
