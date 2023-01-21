<?php

use core\App;
use core\Database;

$id = $_POST['id'] ;



App::resolve(Database::class)->query("DELETE FROM makeup_products WHERE id = :id",[
    'id' => $id
])->statement->execute();

redirect('/admin/dashboard');

