
<?php

use core\App;
use core\Database;

// if(!isAdmin()){
//     goToPage('/login');
// }


$db = App::resolve(Database::class);

// dd($_POST['product_image]);
//get info 

$imagename = "";
$image_dir = "";
if (isset($_FILES['product_image']) ) {
    
    $image_dir = "assets/images/products/";
    $imagename =  imageUpload('product_image',$image_dir);
}
else{
    $imagename = post('image');
}


// insert to database with image path 

$db->query("INSERT INTO makeup_products (product_id,product_name,product_image,product_category,brand,product_price,product_quantity) VALUES (
    :product_id,
    :product_name,
    :product_image,
    :product_category,
    :brand,
    :product_price,
    :product_quantity
)",[
    'product_id' => post('product_id'),
    'product_name' => post('product_name'),
    'product_image' => $image_dir.$imagename,
    'product_category' => post('product_category'),
    'brand' => post('brand'),
    'product_price' => post('product_price'),
    'product_quantity' => post('product_quantity')
]);