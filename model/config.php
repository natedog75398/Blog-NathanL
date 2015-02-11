<?php
require_once (__DIR__ . "/database.php");

$path = "/NathanLopez-Blog/";

$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";

$connection = new database($host, $username, $password, $database);