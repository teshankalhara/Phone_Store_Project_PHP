<?php
$host = 'localhost:3307';
$username = 'root';
$pass = '';
$db = 'phonestore';

$conn = mysqli_connect($host, $username, $pass, $db);

if (!$conn) die("Connection refused") . mysqli_connect_error();
