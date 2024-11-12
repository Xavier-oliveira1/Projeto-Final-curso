<?php
   session_start();
   include_once("connection.php");
   
   if ((isset($_POST['utilizador'])) && (isset($_POST['pass']))) { //Verifica se os parâmetros estão preenchidos
      $utilizador = addslashes($_POST['utilizador']); // tratar dos caracteres de escape
      $psw = addslashes(md5($_POST['pass'])); //md5 criptografa a password

      $sql = "SELECT * FROM utilizador WHERE utilizador = '$utilizador' && pass = '$psw'";
      $query = mysqli_query($connect, $sql); //executar a query 
      $total = mysqli_num_rows($query); //verifica se existe pelo menos um registo

      if ($total == 0) { //nao deu nenhum resultado
         $_SESSION['loginErro'] = "Utilizador ou Password inválido";
         header("Location: login.php");
      } else { //deu um resultado
         setcookie('utilizador', $utilizador, time()+7200);//cookie_name,cookie_value,time()7200sec=2h
         header("Location: index.php"); 
      }
      
   } else {//Se não estiverem preenchidos
      $_SESSION['loginErro'] = "Utilizador ou Password inválido";
      header("Location: login.php");
   }

?>