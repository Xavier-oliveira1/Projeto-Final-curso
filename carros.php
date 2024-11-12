<?php
require_once "connection.php"; //ligaçao com a connection.php //


//Pesquisa por marca

if (isset($_POST['marca_pesqui'])) {
    
    $marca = $_POST['marca_pesqui'];
    $preco_de = $_POST['preco_de'];
    $preco_ate = $_POST['preco_ate'];
    $ano_de = $_POST['ano_de'];
    $ano_ate = $_POST['ano_ate'];

    $sql = "SELECT * FROM carro WHERE marca LIKE '%" . $marca . "%' order By marca";
}else{
    $sql = "SELECT * FROM carro";
}

//--------------//




$connect = mysqli_connect($server, $user, $psw, $dbname); //Faz a conexão com a base de dados

$query = mysqli_query($connect, $sql);
$total = mysqli_num_rows($query);//nº de linhas

$i = 1;//índice



?>

<!DOCTYPE html>
<html lang="pt">
<title>Stand Online</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="carro.css">

<body>

    <header>
        <h1 class="title">Carros para venda</h1>

        <div class="div_menu">
            <a href="index.php" class="home">Home</a>
            <a href="#" class="cars">Carros</a>
            <a href="vender.php" class="sell"> + Vender</a>
        </div>

    </header>

    <!-- Images (Portfolio) -->

    <div class="carros">
        <?php   //Ciclo que imprime os resultados da tabela
        while ($fetch = mysqli_fetch_assoc($query)) {

            echo "<p class=esp>Marca: " . $fetch['marca'] . "</p><br>";
            echo "<p class=esp> Modelo: " . $fetch['modelo'] . "</p><br>";
            echo "<p class=esp> Cilindrada: " . $fetch['cilindrada'] . " CC</p><br>";
            echo "<p class=esp> Cavalos de Potência: " . $fetch['potencia'] . " CV</p><br>";
            echo "<p class=esp> Quilometros: " . $fetch['km'] . " KM</p><br>";
            echo "<p class=esp> Combustível: " . $fetch['combustivel'] . "</p><br>";
            echo "<p class=esp> Ano: " . $fetch['ano'] . "</p><br>";
            echo "<p class=esp>Preço: " . $fetch['preco'] . " €</p><br>";
            echo "<p class=esp> Observações: " . $fetch['observacoes'] . "</p>";
            echo "<img class=img src= img/" . $fetch['imagem'] . " >";

            $i++;
            echo "<hr>";
        }
        ?>
    </div>



</body>

<footer>

</footer>