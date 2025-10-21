<?php

$host = 'localhost:3306;';
$user = 'root';
$pass = '';
$db = 'sistemadsg';
$charset = 'utf8mb4';

$dns = "mysql:host=$host;dbname=$db;charset=$charset";

$option = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
    
];

try{
    $pdo = new PDO($dns, $user, $pass, $option);
    echo "conexion establecida";
} catch (PDOException$e){
    echo "conexion fallida" . $e->getMessage();
}

?>