<?php

$server = "localhost";
$user = "root";
$psw = "";
$dbname = "stand";  

$connect=mysqli_connect($server,$user,$psw,$dbname); //Faz a conexão com a base de dados

if(!$connect){
    die("Conexão Falhou: " .mysqli_connect_error());
}


?>