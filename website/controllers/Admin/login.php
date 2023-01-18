
<?php

use core\App;
use core\Database;

$erros = [];

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];


    $db = App::resolve(Database::class);
    $admin = $db->query('SELECT * FROM admin WHERE email = :email', ['email' => $email])->statement->fetch();
    if($admin){
        
        if(verifyPassword($password, $admin['password'])){
            // dd($admin);
            
            $_SESSION['admin'] = $admin;
            redirect('/admin/dashboard');
        }else{

            $errors[] = 'Invalid password';
        }
    }else{
        $errors[] = 'Invalid email';
    }
}


view('Admin/login.view',[
    'title' => 'Login Page',
    'errors' => $errors ?? [],
    'cssLinks' => '<link rel="stylesheet" href="./../assets/css/login.css">',
    'jsLinks' => '<script src="./../assets/js/login.js"></script>'

]);