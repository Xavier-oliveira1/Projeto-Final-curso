<?php

    if(!isset($_SESSION)){
        session_start();
    }
    
    setcookie("utilizador", "", time()-3600);
    
    session_destroy();

    header("Location:index.php");
        

?>