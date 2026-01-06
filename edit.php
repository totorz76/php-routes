<?php 
include 'functions.php';
$id = $_GET['id'] ?? null;
require 'routes.php';

dg($id);