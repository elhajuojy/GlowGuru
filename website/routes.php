<?php 


$router->get('/', 'Controllers\HomeController.php');
$router->get('/product', 'Controllers\ProductsController.php');


$router->get('/admin/login', 'Controllers\Admin\Login.php');
$router->post('/admin/login', 'Controllers\Admin\Login.php');
$router->get('/admin/logout', 'Controllers\Admin\Logout.php');



$router->get('/admin/dashboard', 'Controllers\Admin\Dashboard.php');

$router->get('/admin/dashboard/products', 'Controllers\Admin\Dashboard.php');
$router->get('/admin/dashboard/products/create', 'Controllers\Admin\Dashboard.php');
$router->post('/admin/dashboard/products/create', 'Controllers\Admin\Dashboard.php');
$router->get('/admin/dashboard/products/edit', 'Controllers\Admin\Dashboard.php');
$router->post('/admin/dashboard/products/edit', 'Controllers\Admin\Dashboard.php');
$router->delete('/admin/dashboard/products', 'Controllers\Admin\Dashboard.php');
$router->delete('/admin/dashboard/', 'Controllers\Admin\Dashboard.php');

