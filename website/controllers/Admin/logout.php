<?php 

//log out admin

session_unset();
session_destroy();
redirect('/admin/login');
