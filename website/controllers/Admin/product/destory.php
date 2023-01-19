<?php

use core\App;
use core\Database;

pos($_POST) ? $id = $_POST['id'] : $id = $_GET['id'];



App::resolve(Database::class)->query("DELETE FROM makeup_products WHERE product_id = :id",[
    'id' => $id
])->statement->execute();

redirect('/admin/dashboard');

