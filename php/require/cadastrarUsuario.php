<?php
    require('conexao.php');

    if(EMPTY($_POST['nome']) || EMPTY($_POST['email']) || EMPTY($_POST['senha']) || EMPTY($_POST['senha2'])){
        echo "<p class='vermelho'>Todos campos sao obrigatórios!</p>";
    } else {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senha2 = $_POST['senha2'];

        if($senha != $senha2){
            echo "<p class='vermelho'>Senhas diferentes!<p>";
        } else {
            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
            $result = $conn->query($sql);

            if($result){
                echo "<p class='text-success'>Cadastrado com sucesso!<p>";
                ?>
                    <script>window.location.href = "./index.php";</script>
                <?php
            } else{
                $sql = "SELECT * FROM usuarios WHERE email = '$email'";
                $result = $conn->query($sql);
                $usuario = mysqli_fetch_assoc($result);
                
                if($usuario["email"] == $email){
                    echo "<p class='vermelho'>Email ja cadastrado!</p>";
                } else {
                    echo "<p class='vermelho'>Ocorreu um erro!</p>";
                }
            }
        }
    }
?>