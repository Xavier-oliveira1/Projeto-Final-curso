<?php
//localhost/Projeto Final/vender.php
    include_once("connection.php");


?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vende.css">
    <title>Anunciar Automóvel</title>
</head>

<header>
    <h1 class="title">Anunciar o seu automóvel</h1>

    <div class="div_menu" >
        <a href="index.php" class="home">Home</a>
        <a href="carros.php" class="cars">Carros</a>
    </div>

</header>

<body>

    <form method="POST" action="registar_carro.php" enctype="multipart/form-data" class="form_vender">
        
        <label for="marca">Marca:</label>
        <select name="marca">
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
        </select><br><br><!--Marca-->


        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo"  name="modelo" placeholder="Modelo"><br><br><!-- Modelo-->

        <label for="cc">Cilindrada:</label>
        <input type="number" id="cc" required name="cc" placeholder="Cilindrada"><br><br>

        <label for="cv">Potência:</label>
        <input type="number" id="cv" required name="cv" placeholder="CV"><br><br>

        <label for="km">Quilómetros:</label>
        <input type="number" id="km" required name="km" placeholder="KM"><br><br>

        <label for="combustivel">Tipo de Combustivel:</label>
        <select name="combustivel">
            <option value="Gasolina">Gasolina</option>
            <option value="Gasóleo">Gasóleo</option>
            <option value="Elétrico">Elétrico</option>
            <option value="Híbrido(Gasolina)">Híbrido(Gasolina)</option>
            <option value="Híbrido(Gasoleo)">Híbrido(Gasoleo)</option>
            <option value="GPL">GPL</option>
        </select><br><br><!--Tipo de combustivel-->

        <label for="ano">Ano do Automóvel:</label>
        <select name="ano">
            <option value="2021">2021</option>
            <option value="2020">2020</option>
            <option value="2019">2019</option>
            <option value="2018">2018</option>
            <option value="2017">2017</option>
            <option value="2016">2016</option>
            <option value="2015">2015</option>
            <option value="2014">2014</option>
            <option value="2013">2013</option>
            <option value="2012">2012</option>
            <option value="2011">2011</option>
            <option value="2010">2010</option>
            <option value="2009">2009</option>
            <option value="2008">2008</option>
            <option value="2007">2007</option>
            <option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
        </select><br><br><!-- Ano-->

        <label for="preco">Preço de Venda da Viatura:</label>
        <input type="number" id="preco" required name="preco" placeholder="€€"><br><br>

        <label for="obs">Observações</label>
        <textarea name="obs" placeholder="Descreva o seu carro:"></textarea><br><br>

        <label for="img">Imagem</label>
        <input type="file" name="img" value="Procurar" required><br><br> 

        <input name="btn_anunciar" type="submit" value="Anunciar"> 

    </form>

</body>
</html>