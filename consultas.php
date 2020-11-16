<?php
include_once("conexao.php");

$sql = "select * from usuarios";
$consulta = mysqli_query($connexao,$sql);
$registros = mysqli_num_rows($consulta);  // mostrar quantas linhas existem no banco de dados 

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
            <h1>Cosultas</h1>
            <hr><br><br>

            <?php
print"$registros = Registros enconntrados";
         
             

            ?>
            
        </section>
    </div>
</body>

</html>