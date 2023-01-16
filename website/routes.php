<?php 


$router->get('/', 'Controllers\HomeController.php');
$router->post('/', 'Controllers\HomeController.php');
$router->delete('/', 'Controllers\HomeController.php');


$router->get('/about', 'Controllers\AboutController.php');
$router->get('/contact', 'Controllers\ContactController.php');
$router->get('/login', 'Controllers\LoginController.php');

