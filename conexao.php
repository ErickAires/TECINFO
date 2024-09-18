<?php
$host = 'localhost';
$dbname = 'sistema';
$username = 'root';
$password = '';

try{
    &PDO = new PDO("mysql:host=$host;dbname", $username, $password);
    &PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
    die("Erro na conexao: " . $e->getMessage());
}


?>