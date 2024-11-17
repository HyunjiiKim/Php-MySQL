<?php

$type='mysql';
$server='localhost';
$db='php_mysql';
$port='3306'; // It depends on program, I saved it as 3306 on MAMP
$charset='utf8mb4';

$username='';
$password='';

    $options=[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPAPERS => false,
    ];

$dsn="type:host=$server;dbname=$db:port=$port;charset=$charset";
try{
    $pdo = new PDO ($dsn, $username, $password, $options);
}catch (PDOException $e){
    throw new PDOException($e->getMessage(), $e->getCode());
}

?>