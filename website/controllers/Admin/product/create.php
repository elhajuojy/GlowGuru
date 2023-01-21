
<?php

use core\App;
use core\Database;
use core\Validator;

// if(!isAdmin()){
//     goToPage('/login');
// }


$db = App::resolve(Database::class);




if(array_key_exists('save_multiple_data',$_POST)){
    for ($i=0; $i <count($_POST['product_name']) ; $i++) { 
        $name= $_POST['product_name'][$i];
        $cateogry =  $_POST['product_category'][$i];
        $product_brand= $_POST['brand'][$i];
        $product_price= $_POST['product_price'][$i];
        $product_quantity = $_POST['product_quantity'][$i];
        $image_path = "";
        //validate
        if(Validator::string($name) && Validator::string($cateogry) && Validator::string($product_brand) && Validator::string($product_price) && Validator::string($product_quantity)){
        if (isset($_FILES['product_image']) ) {
            $image = $_FILES['product_image'];
            $image_dir = "assets/images/products/";
            move_uploaded_file($image['tmp_name'][$i], $image_dir.$image['name'][$i]);
            $image_path = $image_dir.$image['name'][$i];
        }
        $db->query("INSERT INTO makeup_products (product_name,product_category,product_brand,product_price,product_quantity,product_image) VALUES (:name,:category,:brand,:price,:quantity,:image)",[
            'name' => $name,
            'category' => $cateogry,
            'brand' => $product_brand,
            'price' => $product_price,
            'quantity' => $product_quantity,
            'image' => $image_path
        ]);
    }

    }

}



// if(Validator::string(post('product_name')) && Validator::string(post('product_category')) && Validator::string(post('brand')) && Validator::string(post('product_price')) && Validator::string(post('product_quantity'))){
//     // dd('ok');

//     $imagename = "";
//     $image_dir = "";
// if (isset($_FILES['product_image']) ) {
    
//     $image_dir = "assets/images/products/";
//     $imagename =  imageUpload('product_image',$image_dir);
// }
// else{
//     $imagename = post('image');
// }



// }




//upload image


