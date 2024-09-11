<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "senac";

//Criar conexao 
$con = mysqli_connect($servername, $username, $password, $dbname);

//verificador conexao
if (!$con){
    die("Erro na Conexao:" . mysqli_connect_erro());
}
echo "Conectado com sucesso!";
?>