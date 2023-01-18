<?php 


$router->get('/', 'Controllers\HomeController.php');


$router->get('/about', 'Controllers\AboutController.php');
$router->get('/contact', 'Controllers\ContactController.php');
$router->get('/admin/login', 'Controllers\Admin\Login.php');

