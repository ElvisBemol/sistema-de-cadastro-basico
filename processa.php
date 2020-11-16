<?php
include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];

$sql ="insert into usuarios (nome, email,profissao) values ('$nome','$email','$profissao')"; // variável que vai armazenar comandos sql
$salvar = mysqli_query($connexao,$sql); //variável que vai guardar comandos que vão registrar  

mysqli_close($connexao);
?>