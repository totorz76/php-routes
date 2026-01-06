<?php
include 'functions.php';

$page = $_GET ['page'] ?? 'home';

$routes= [
    'contact' => 'contact.php',
    'about' => 'about.php',
    'home' => 'home.php'
];

if (!array_key_exists($page, $routes)) {
    redirect( '404.php');
}

redirect($routes[$page]);

/*
http://localhost/php-routes/index.php?page=contact
http://localhost/php-routes/index.php?page=about
http://localhost/php-routes/index.php?page=prix

*/