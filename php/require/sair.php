<?php
    session_start();

    $_SESSION['id'] = "";
    $_SESSION['nome'] = "";
    $_SESSION['email'] = "";
    $_SESSION['disc'] = ""; 
    $_SESSION['perfil'] = "";

    header("Location: ../../index.php");
?>