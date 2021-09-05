<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'pescaderia';
    
    try{
        $conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password);
    }catch(PDOException $e){
        die('Connected failed: '.$e->getMessage());
    }

    $mysql = mysqli_connect($server,$username,$password,$database);
?>