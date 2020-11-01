
<?php
    $verificacao = function() {

        require('conexao.php');

        if(EMPTY($_POST['email']) || EMPTY($_POST['senha'])){
        echo "Todos campos sao requeridos!";
    } else {

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email'"; //Quando digita um email que não existe no BD dá erro. Acho que o erro acontece nessa linha que tenta puxar o email mas não acha e da null.
        $result = $conn->query($sql);
        $usuario = mysqli_fetch_assoc($result);

        if(($usuario["email"] != $email)||($usuario["senha"] != $senha)){
            echo "Email ou senha incorretos!";
        }else{
            if($usuario["disc"] == 0){
                ?>
                    <script>window.location.href = "disc.php";</script>
                <?php
            } else {
                ?>
                    <script>window.location.href = "trilha.php";</script>
                <?php
            }
        }
    }
};
?>