<?php
//conectar com a base de dados
include_once("connection.php");

$sql = "SELECT marca, modelo, combustivel, km, preco, imagem FROM carro ORDER BY RAND() LIMIT 5;";
//--------------//

$connect = mysqli_connect($server, $user, $psw, $dbname); //Faz a conexão com a base de dados

$query = mysqli_query($connect, $sql);
$total = mysqli_num_rows($query); //nº de linhas

$i = 1; //índice


?>


<!DOCTYPE html>
<html lang="pt">
<title>Projeto Final</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index_style.css">

<body>

  <!-- Header -->
  <header class="header">
    <div class="div_header">
      <h1 class="title">Projeto Final Cinel 2021</h1>
    </div>

    <!-- Navbar -->
    <div class="div_menu">
      <a href="#" class="home">Home</a>
      <a href="carros.php" class="cars">Carros</a>
      <a href="vender.php" class="sell"> + Venr</a>
      <a class="login_register">
        <?php

        if (isset($_COOKIE['utilizador'])) {
          $login_cookie = $_COOKIE['utilizador']; //Recebe o nome do utilizador pelo setcookie(valida_login.php)
          echo "</br></br>Bem-Vindo, $login_cookie ";
          echo '<a href="logOut.php" class="logout">LogOut</a>';
        } else {
          echo '<a href="registo.php" class="registar">Registe-se </a>';
          echo '<a href="login.php" class="login"> Login</a>';
        }
        ?>
      </a>
    </div>
    
  </header>


  <!--Pesquisa-->
  <form method="POST" class="pesquisa" action="carros.php">

    <!--Marca dos Carros-->
    <label for="carros">Marca:</label>
    <select name="marca_pesqui">
      <option value="Abarth">Abarth</option>
      <option value="Alfa Romeo">Alfa Romeo</option>
      <option value="Alpine">Alpine</option>
      <option value="Aston Martin">Aston Martin</option>
      <option value="Audi">Audi</option>
      <option value="Bentley">Bentley</option>
      <option value="BMW">BMW</option>
      <option value="Cadillac">Cadillac</option>
      <option value="Chevrolet">Chevrolet</option>
      <option value="Chrysler">Chrysler</option>
      <option value="Citroen">Citroen</option>
      <option value="Dacia">Dacia</option>
      <option value="Datsun">Datsun</option>
      <option value="Dodge">Dodge</option>
      <option value="DS">DS</option>
      <option value="Ferrari">Ferrari</option>
      <option value="Fiat">Fiat</option>
      <option value="Ford">Ford</option>
      <option value="Honda">Honda</option>
      <option value="Hummer">Hummer</option>
      <option value="Hyundai">Hyundai</option>
      <option value="Jaguar">Jaguar</option>
      <option value="Jeep">Jeep</option>
      <option value="Kia">Kia</option>
      <option value="Lamborghini">Lamborghini</option>
      <option value="Lancia">Lancia</option>
      <option value="Land Rover">Land Rover</option>
      <option value="Lexus">Lexus</option>
      <option value="Lotus">Lotus</option>
      <option value="Maserati">Maserati</option>
      <option value="Mazda">Mazda</option>
      <option value="Mercedes-Benz">Mercedes-Benz</option>
      <option value="MG">MG</option>
      <option value="Microcar">Microcar</option>
      <option value="MINI">MINI</option>
      <option value="Mitsubishi">Mitsubishi</option>
      <option value="Nissan">Nissan</option>
      <option value="Opel">Opel</option>
      <option value="Peugeot">Peugeot</option>
      <option value="Porsche">Porsche</option>
      <option value="Renault">Renault</option>
      <option value="Rolls Royce">Rolls Royce</option>
      <option value="Rover">Rover</option>
      <option value="Saab">Saab</option>
      <option value="Seat">Seat</option>
      <option value="Skoda">Skoda</option>
      <option value="Smart">Smart</option>
      <option value="Subaru">Subaru</option>
      <option value="Suzuki">Suzuki</option>
      <option value="Tesla">Tesla</option>
      <option value="Toyota">Toyota</option>
      <option value="Volkswagen">Volkswagen</option>
      <option value="Volvo">Volvo</option>
    </select>

    <!--Preço-->
    <label for="preco">Preço de:</label>
    <select name="preco_de" id="preco">

      <optgroup label="Preço">
        <option value="250">250</option>
        <option value="500">500</option>
        <option value="1000">1000</option>
        <option value="1250">1250</option>

      </optgroup>
    </select>
    Até:
    <select name="preco_ate" id="preco">

      <optgroup label="Preço">
        <option value="250">250</option>
        <option value="500">500</option>
        <option value="1000">1000</option>
        <option value="1250">1250</option>

      </optgroup>
    </select>

    <!--Ano-->
    <label for="ano">Ano de:</label>
    <select name="ano_de" id="ano">

      <optgroup label="Ano">
        <option value="250">250</option>
        <option value="500">500</option>
        <option value="1000">1000</option>
        <option value="1250">1250</option>

      </optgroup>
    </select>
    Até:
    <select name="ano_ate" id="ano">

      <optgroup label="Ano">
        <option value="250">250</option>
        <option value="500">500</option>
        <option value="1000">1000</option>
        <option value="1250">1250</option>

      </optgroup>
    </select>


    <!--Botão de Pesquisa-->
    <input class="pesquisar_submit" type="submit" value="Pesquisar">

  </form>

  <!-- Lista de Marcas -->
  <div class="div_lista_marcas">
    <ul>
      <a href="carros.php"><img class="logos" src="img/logo/abarth.png" alt=""></a>
      <a href="carros.php"><img class="logos" src="img/logo/alfa-romeo.png" alt=""></a>
      <a href="carros.php"><img class="logos" src="img/logo/alpine_logo.png" alt=""></a>
      <a href="carros.php"><img class="logos" src="img/logo/Aston_Martin_logo.png" alt=""></a>
      <a href="carros.php"><img class="logos" src="img/logo/audi_logo.png" alt=""></a>
      <a href="carros.php"><img class="logos" src="img/logo/bentley_logo.png" alt=""></a>
      <a href="carros.php"><img class="logos" src="img/logo/bmw_logo.png" alt=""></a>
      <a href="carros.php"><img class="logos" src="img/logo/cadillac_logo.png" alt=""></a>
      <a href="carros.php"><img class="logos" src="img/logo/chevrolet_logo.png" alt=""></a>
      <a href="carros.php"><img class="logos" src="img/logo/chrysler_logo.png" alt=""></a>
      <a href="carros.php"><img class="logos" src="img/logo/citroen_logo.png" alt=""></a>
    </ul>
  </div>

  <!--Destaques-->
  <div class="carros_indi">
    
    <?php   //Ciclo que imprime os resultados da tabela
    while ($fetch = mysqli_fetch_assoc($query)) {
    ?>
      <a href="carros.php" target="_blank" class="carro_indi">
        <?php
        echo "<img class=img src= img/" . $fetch['imagem'] . " ></br>";
        echo "<span class=esp>Marca: " . $fetch['marca']. "</span></br>";
        echo "<span class=esp> Modelo: " . $fetch['modelo'] . "</span></br>";
        echo "<span class=esp> Quilometros: " . $fetch['km'] . " KM</span></br>";
        echo "<span class=esp> Combustível: " . $fetch['combustivel'] . "</span></br>";
        echo "<span class=esp>Preço: " . $fetch['preco'] . " €</span>";
        ?>
      </a>

    <?php
      $i++;
    }
    ?>
    
  </div>

  <footer>
    <p>Autor do Projeto: Xavier Soares de Oliveira</p>
    <a href="https://www.cinel.pt/appv2">Escola</a>
  </footer>

</body>



</html>