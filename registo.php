<?php
session_start(); //inicia sessão
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registo.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!--icones-->
    <title>Registar Utilizador</title>
</head>

<body>

    <header>
        <h1 class="title">Registar Utilizador</h1>

        <!-- Navbar (placed at the bottom of the header image) -->
        <div class="div_menu">
            <a href="index.php" class="button"><i class="fas fa-home"></i></a>
        </div>
    </header>

    <form method="POST" action="registar_utilizador.php" class="form_registo">
        
        <i class="fas fa-user-circle fa-4x"></i></br></br>

        <label>Nome:</label>
        <input type="text" name="nome" required></br></br>

        <label>Email:</label>
        <input type="email" name="email" required></br></br>

        <label>Telemóvel:</label>
        <input type="text" name="telemovel"></br></br>

        <label>Utilizador:</label>
        <input type="text" name="utilizador" required></br></br>

        <label>Password:</label>
        <input type="password" name="pass" required></br></br>

        <input type="submit" value="Registar" name="submit_entrar" class="registar_button">

    </form>

    <p class="registoErro">
        <!-- Mostra um erro se não houver sessão -->
        <?php
        if (isset($_SESSION['registoErro'])) {
            echo $_SESSION['registoErro'];
            unset($_SESSION['registoErro']);
        }
        ?>
    </p>

</body>

</html>