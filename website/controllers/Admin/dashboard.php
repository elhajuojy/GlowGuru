<?php 

// echo isLogedInAdmin();
// die();
!isLogedInAdmin() ? redirect("/"): null;




use core\App;
use core\Database;

$db = App::resolve(Database::class);

$products  = $db->query('SELECT * FROM makeup_products ')->statement->fetchAll();

$totalProducts = $db->query('SELECT count(*) as total FROM makeup_products')->statement->fetch();
$WorringProducts = $db->query('SELECT count(*) as total FROM makeup_products WHERE product_quantity < 10')->statement->fetch();

$avgPrice = $db->query('SELECT AVG(product_price) as avg_price FROM makeup_products')->statement->fetch();
$MinPrice = $db->query('SELECT Min(product_price) as min_price FROM makeup_products')->statement->fetch();

$MaxPrice = $db->query('SELECT Max(product_price) as max_price FROM makeup_products')->statement->fetch();


$totalProducts = $totalProducts["total"];
$WorringProducts = $WorringProducts["total"];
$avgPrice = $avgPrice['avg_price'];
$MinPrice = $MinPrice['min_price'];
$MaxPrice = $MaxPrice['max_price'];

view('Admin/dashboard.view', [
    'title' => 'dashboard',
    "products" => $products,
    "totalProducts" => $totalProducts,
    "WorringProducts" => $WorringProducts,
    'MinPrice'=>$MinPrice,
    'AVgPrice'=>$avgPrice,
    'MaxPrice'=>$MaxPrice
]);