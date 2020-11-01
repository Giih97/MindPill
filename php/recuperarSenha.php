<?php    

    if(EMPTY($_POST['email']) || EMPTY($_POST['senha']) || EMPTY($_POST['senha2'])){
        echo "<p class='vermelho'>Todos campos sao obrigatórios!</p>";
    } else {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senha2 = $_POST['senha2'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $result = $conn->query($sql);
        $usuario = mysqli_fetch_assoc($result);
        $idusuario = $usuario['idusuarios'];

        if($usuario['email'] == $email){
            if($senha != $senha2){
                echo "<p class='vermelho'>Senhas diferentes!</p>";
            } else {
                $sql = "UPDATE usuarios SET senha = $senha WHERE idusuarios = $idusuario";
                $result = $conn->query($sql);

                echo "<p class='green'>Senha alterada com sucesso!</p>";
            }
        } else {
            echo "<p class='vermelho'>Email nao encontrado!</p>";
        }
    }
?>