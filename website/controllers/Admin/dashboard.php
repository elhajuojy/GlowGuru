<?php 

// echo isLogedInAdmin();
// die();
!isLogedInAdmin() ? redirect("/"): null;




use core\App;
use core\Database;

$db = App::resolve(Database::class);

$products  = $db->query('SELECT * FROM makeup_products limit 10')->statement->fetchAll();

view('Admin/dashboard.view', [
    'title' => 'dashboard',
    "products" => $products,
]);