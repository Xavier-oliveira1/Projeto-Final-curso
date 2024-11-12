<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    include_once "connection.php"; //ligaçao com a connection.php //


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telemovel = $_POST['telemovel'];
    $login = $_POST['utilizador']; //recebe o nome da pagina ("registo.php") através do metodo post
    $psw = md5($_POST['pass']);

    mysqli_select_db($connect, '$dbname');

    $sql = "SELECT * FROM utilizador WHERE utilizador = '$login'";
    $query = mysqli_query($connect, $sql); //executar a query 
    $total = mysqli_num_rows($query); //verifica se existe pelo menos um registo

    if ($total == 0) { //verifica se existe um utilizador igual
        $sql = "INSERT INTO utilizador (nome,email,telemovel,utilizador,pass) VALUES ('$nome','$email','$telemovel','$login','$psw')";

        if (mysqli_query($connect, $sql)) {
            echo "<script>alert('Utilizador Guardado!'); window.location = 'login.php'; </script>"; //Dá o pop-up de uma janela a confirmar se guardou os dados
        } else {
            echo "Deu ERRO!!: " . $sql . "<br>" . mysqli_error($connect);
        }
        mysqli_close($connect);

    } else{
        $_SESSION['registoErro'] = "Utilizador já registado";
        header("Location: registo.php");
    }

    ?>
</body>

</html>