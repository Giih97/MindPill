<?php
    require('conexao.php');

    session_start();

    if(EMPTY($_POST['email']) || EMPTY($_POST['senha'])){
        echo "Todos campos sao requeridos!";
    } else {

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha';"; 
        $result = $conn->query($sql);
        $usuario = mysqli_fetch_assoc($result);

        $sql = "SELECT * FROM parceiros WHERE email = '$email' AND senha = '$senha';"; 
        $result = $conn->query($sql);
        $parceiro = mysqli_fetch_assoc($result);

        if($usuario){ //Verificar se existe email na tabela usuarios
            $_SESSION['id'] = $usuario['idusuarios'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['disc'] = $usuario['disc']; 
            $_SESSION['perfil'] = $usuario['perfil'];    

            if($usuario["disc"] == 0){
                ?>
                    <script>window.location.href = "./disc.php";</script>
                <?php
            } else {
                ?>
                    <script>window.location.href = "./trilhas/trilha.php";</script>
                <?php
            }
        } else if($parceiro){ //Verificar se existe email na tabela parceiros
            $_SESSION['id'] = $parceiro['idparceiros'];
            $_SESSION['nome'] = $parceiro['nome'];
            $_SESSION['email'] = $parceiro['email'];
              
            header("location: ./parceiros.php");
        } else{
            ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Warning!</strong> Email ou senha incorretos.
            </div>
            <?php
        }
    }
?>