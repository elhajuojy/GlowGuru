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

// dd($totalProducts["total"]);
// dd($WorringProducts["total"]);

$totalProducts = $totalProducts["total"];
$WorringProducts = $WorringProducts["total"];
view('Admin/dashboard.view', [
    'title' => 'dashboard',
    "products" => $products,
    "totalProducts" => $totalProducts,
    "WorringProducts" => $WorringProducts
]);