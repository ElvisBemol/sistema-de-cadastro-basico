<?php

$hostname = "localhost";
$user = "root";
$password ="";
$database = "cadastro";
$connexao = mysqli_connect($hostname, $user, $password, $database);

if(!$connexao){
    print"falha na conexão com o banco de dados";
}else{print"Conexão executada com sucesso";}

?>