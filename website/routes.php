<?php 


$router->get('/', 'Controllers\HomeController.php');
// $router->get('/product', 'Controllers\ProductsController.php');


$router->get('/admin/login', 'Controllers\Admin\Login.php');
$router->post('/admin/login', 'Controllers\Admin\Login.php');
$router->get('/admin/logout', 'Controllers\Admin\Logout.php');



$router->get('/admin/dashboard', 'Controllers\Admin\Dashboard.php');

$router->get('/admin/dashboard/products', 'Controllers\Admin\Dashboard.php');

$router->get('/product', 'Controllers\Admin\product\show.php');
$router->post('/product', 'Controllers\Admin\product\create.php');
$router->delete('/product', 'Controllers\Admin\product\destory.php');
$router->update('/product', 'Controllers\Admin\product\update.php');


$router->get('/productDetail', 'Controllers\product\showDetail.php');
