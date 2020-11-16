<?php
include_once("conexao.php");

$sql = "select * from usuarios";
$consulta = mysqli_query($connexao,$sql);
$registros = mysqli_num_rows($consulta);  // mostrar quantas linhas existem no banco de dados 



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
<form action="" method="get">
    Filtrar por profissão: <input type="text" name="filtro" class="campo" require autofocus>
    <input type="submit" value="Pesquisar"  class="btn">
    
</form>
            <?php
print"$registros = Registros enconntrados";
         
        print"<br><br>";
        
        while($exibirRegistros = mysqli_fetch_array($consulta)){
$codigo = $exibirRegistros[0];
$nome = $exibirRegistros[1];
$email = $exibirRegistros[2];
$profissao = $exibirRegistros[3];

print "<article>";

print "$codigo<br>";
print "$nome<br>";
print "$email<br>";
print "$profissao<br>";

print"</article>";



        }
        mysqli_close($connexao);
            ?>
            
        </section>
    </div>
</body>

</html>