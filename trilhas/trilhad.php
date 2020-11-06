<?php
    require('../php/require/conexao.php');

    session_start();
    
    $idusuario = $_SESSION['id'];
    $_SESSION['perfil'] = "DOMINÂNCIA";
    $perfil = $_SESSION['perfil'];

    $sql = "UPDATE usuarios SET perfil = '$perfil' WHERE idusuarios = $idusuario";
    $result = $conn->query($sql);

    $sql = "UPDATE usuarios SET disc = 1 WHERE idusuarios = $idusuario";
    $result = $conn->query($sql);

    include_once('trilha.php');
?>
