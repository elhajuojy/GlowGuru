<?php


use core\App;
use core\Database;
use core\Validator;

$id = get('id');



$db = App::resolve(Database::class);


$name = $_POST['product_name'][0];
$cateogry =  $_POST['product_category'][0];
$product_brand = $_POST['brand'][0];
$product_price = $_POST['product_price'][0];
$product_quantity = $_POST['product_quantity'][0];
$product_description = $_POST['product_description'][0];
$product_id = $_POST['product_id'][0];
$image_path = "";
$old_image_path = $_POST['old_image_path'];



if (Validator::string($name) && Validator::string($cateogry) && Validator::string($product_brand) && Validator::string($product_price) && Validator::string($product_quantity) && Validator::string($product_description) && Validator::string($product_id)) {
    
    
    if (isset($_FILES['product_image']) && !empty($_FILES['product_image']['name'][0])) {
        $image = $_FILES['product_image'];
        $image_dir = "assets/images/products/";
        try {
            move_uploaded_file($image['tmp_name'][0], $image_dir . $image['name'][0]);
        } catch (\Throwable $th) {
            //throw $th;
            echo $th->getMessage();
        }
        
        $image_path = "./../".$image_dir . $image['name'][0];
    }else{
        $image_path = $old_image_path;
    } 


    
    $db->query(
        "UPDATE makeup_products SET product_name = :name, product_category = :category, brand = :brand, product_price = :price, product_quantity = :quantity, product_description = :description , product_image = :image WHERE id = :id",
        [
            'name' => $name,
            'category' => $cateogry,
            'brand' => $product_brand,
            'price' => $product_price,
            'quantity' => $product_quantity,
            'image' =>   $image_path,
            'description' => $product_description,
            'id' => $id
        ]
    )->statement->execute();
}




view('Admin/product/productCreate.view', [
    'title' => 'Update Product',
    'button' => 'insert into database',
    'alert' => 'Product Updated Successfully'

]);
