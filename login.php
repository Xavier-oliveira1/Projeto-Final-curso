<?php
session_start(); //inicia sessão
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script><!--icones-->
    <title>Login</title>
</head>

<header>
    <h1>Login</h1>

    <!-- Navbar (placed at the bottom of the header image) -->
    <div class="div_menu">
        <a href="index.php" class="button"><i class="fas fa-home"></i></a>
    </div>
</header>

<body>

    <form method="POST" action="valida_login.php" class="form_login">
        <!--Formulário do Login -->

        <i class="fas fa-lock fa-4x"></i></br></br>

        <label>Utilizador:</label>
        <input type="text" name="utilizador"></br></br>

        <label>Password:</label>
        <input type="password" name="pass"></br></br>

        <input type="submit" value="Login" name="submit_entrar" class="login_button"></br></br>

        <a href="registo.php" name="a_registo" class="registar_a">Ainda não tem conta? Registe-se</a>
    </form>

    <p class="loginErro">
        <!-- Mostra um erro se não houver sessão -->
        <?php
        if (isset($_SESSION['loginErro'])) {
            echo $_SESSION['loginErro'];
            unset($_SESSION['loginErro']);
        }
        ?>
    </p>

</body>

</html>