<?php
include 'functions.php';
require 'routes.php';

// $page = isset($_GET['page']) ? $_GET['page'] : 'home';
// $page = $_GET ['page'] ?? 'home';
$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? 'home';
$page = $pageFiltrer ?? 'home';



if (!array_key_exists($page, $routes)) {
    redirect( '404.php');
}

redirect($routes[$page]);

/*
http://localhost/php-routes/index.php?page=contact
http://localhost/php-routes/index.php?page=about
http://localhost/php-routes/index.php?page=prix
http://localhost/php-routes/?page=edit&id=45
*/