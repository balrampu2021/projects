<?php
define('BASE_URL', 'http://localhost/project/');
define('BASE_PATH', __DIR__);

$servername = "localhost";
$username = "root";
$password = "";

try{
	$conn = new PDO("mysql:host=$servername;dbname=time_tracker", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }