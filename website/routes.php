<?php 


$router->get('/', 'controllers/HomeController.php');
$router->get('/home', 'controllers/HomeController.php');

// $router->get('/product', 'Controllers\ProductsController.php');


$router->get('/admin/login', 'controllers/Admin/Login.php');
$router->post('/admin/login', 'controllers/Admin/Login.php');
$router->get('/admin/logout', 'controllers/Admin/Logout.php');

$router->get('/searchProduct', 'controllers/Admin/product/searchProduct.php');




$router->get('/admin/dashboard', 'Controllers/Admin/Dashboard.php');

$router->get('/admin/dashboard/products', 'Controllers/Admin/Dashboard.php');

$router->get('/product', 'Controllers/Admin/product/show.php');
$router->post('/product', 'Controllers/Admin/product/create.php');
$router->delete('/product', 'Controllers/Admin/product/destory.php');
$router->update('/product', 'Controllers/Admin/product/update.php');


$router->get('/productDetail', 'Controllers/product/showDetail.php');
