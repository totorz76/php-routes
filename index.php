<?php
include 'functions.php';

$page = $_GET ['page'];

$routes= [
    'contact' => 'contact.php',
    'about' => 'about.php',
    'index' => 'index.php'
];

if (array_key_exists($page, $routes)) {
    include $routes[$page];
} else {
    include '404.php';
}