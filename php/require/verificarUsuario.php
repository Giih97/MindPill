<?php
        

    require('conexao.php');

    session_start();

    if(EMPTY($_POST['email']) || EMPTY($_POST['senha'])){
        echo "Todos campos sao requeridos!";
    } else {

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha';"; //Quando digita um email que não existe no BD dá erro. Acho que o erro acontece nessa linha que tenta puxar o email mas não acha e da null.
        $result = $conn->query($sql);
        $usuario = mysqli_fetch_assoc($result);

        $sql = "SELECT * FROM parceiros WHERE email = '$email' AND senha = '$senha';"; 
        $result = $conn->query($sql);
        $parceiro = mysqli_fetch_assoc($result);


        if($usuario){ 
            $_SESSION['id'] = $usuario['idusuarios'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];   //Verificar se existe email na tabela usuario

            header("location: ./disc.php");

            if($usuario["disc"] == 0){
                ?>
                    <script>window.location.href = "disc.php";</script>
                <?php
            } else {
                ?>
                    <script>window.location.href = "trilha.php";</script>
                <?php
            }
        } else if($parceiro){ //Verificar se existe email na tabela parceiros
            $_SESSION['id'] = $usuario['idparceiros'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];
              
            header("location: ./disc.php");

            ?>
                <script>window.location.href = "parceiros.php";</script>
            <?php
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