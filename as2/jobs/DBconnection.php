<?php
//verifying for the privilages
if(!defined('job')){
	die('<img src="../images/error/404.png" style="width:100%;margin:0;overflow:hidden;"><div style="display:flex; position:absolute;bottom:0px;margin-left:43%;"><h1>Page not found <a href="../index.php">Back to home page</a></h1></div>');
} 
//database connection
$server = "localhost";
$user_name = "root";
$database = 'job';
$password = "";

try {
    $pdo = new PDO("mysql:host=$server;dbname=$database", $user_name, $password);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }