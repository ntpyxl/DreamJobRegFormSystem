<?php  

$host = "localhost";
$user = "root";
$password = "";
$dbname = "software_eng_account_system";
$dsn = "mysql:host={$host};dbname={$dbname}";
$pdo = new PDO($dsn, $user, $password);

?>