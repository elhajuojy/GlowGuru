<?php 

isLogedInAdmin() ? redirect("/"): null;



view('Admin/dashboard.view', [
    'title' => 'dashboard',
]);