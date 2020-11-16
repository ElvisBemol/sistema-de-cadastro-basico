<?php
include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];

$sql ="insert into usuarios (nome, email,profissao) values ('$nome','$email','$profissao')"; // variável que vai armazenar comandos sql
$salvar = mysqli_query($connexao,$sql); //variável que vai guardar comandos que vão registrar  


$linhas = mysqli_affected_rows($connexao);// verificar linhas afetadas 


mysqli_close($connexao);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro</title>
    <link rel="stylesheet" href="_css/estylo.css">
</head>

<body>
    <div class="container">
        <nav>
            <ul class="menu">
                <a href="index.html">
                    <li>Cadastro</li>
                </a>

                <a href="consultas.php">
                    <li>Consultas</li>
                </a>
            </ul>
        </nav>
        <section>
            <h1>Confirmação de Cadastro</h1>
            <hr><br><br>

            <?php

            if ($linhas == 1){
                print "Cadastro efetuado com sucesso";
            }else{
                print "Cadastro não efetuado. <br> Já existe um usuário com esse E-mail";
            }

            ?>
            
        </section>
    </div>
</body>

</html>
<!--proxima aula https://www.youtube.com/watch?v=ejnU-17yd8A-->