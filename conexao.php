<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "carroceu_cadastro";
//Criar a conexão 
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
// checar conexão
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }




?>