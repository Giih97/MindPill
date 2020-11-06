<?php

$servername="localhost";
$username="root";
$password="";
$database="mindpill";

//criando a conaxão

$conn=mysqli_connect($servername, $username, $password, $database);

//correção do erro de acentuação trabahando com bd
$conn->query("set names utf8");

//Verificando a conexão
if(!$conn){
    die("A conexão ao BD falhou". mysqli_connect_error());
}

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['motivo']) && isset($_POST['mensagem'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $motivo = $_POST['motivo'];
    $mensagem = $_POST['mensagem'];

    $sql = "insert into mensagens (nome, email, motivo, mensagem) values ('$nome', '$email', '$motivo', '$mensagem')";
    $result = $conn->query($sql);
}

?>


<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="image/logo01.png">
    <style>
        
    body {
        background: rgb(85, 221, 187);
    }

    #rodape {
        position: absolute;
        left: 50%;
        top: 100%;
        margin-top: 50px;
        margin-left: -40px;
    }
    </style>
    <title>Parceiros</title>

</head>
<main>

    <body>
        <header>
            <!-- CABECALHO e MENU-->
            <?php 
               include('php/include/cabecalho.html');
            ?>
        </header>

        
        <div class="container">

        
        <div class="row">

        
            
            <div class="col-sm-8"> 
            <div>
                    <img class="img img-fluid" src="./image/cyber-brain.png" alt="" width=800>

                    
            </div>

            </div>
            <div class="col-sm-4">

                <form action="" method="POST">

                    <div class="form-group, col-sm-20 my-1">
                        <h1>Fale Conosco</h1>

                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>

                    <div class="form-group, col-sm-20 my-1">
                        <label for="email">Endereço de email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="nome@exemplo.com">
                    </div>

                    <div class="form-group, col-sm-20 my-1">
                        <label for="mensagem">Digite aqui sua mensagem</label>
                        <textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
                    </div>

                    <div class="form-group, col-sm-20 my-1">
                        <label for="motivo">Selecione o motivo do seu contato: </label>
                        <select multiple class="form-control" name="motivo" id="motivo">
                            <option>Dúvidas</option>
                            <option>Reclamação</option>
                            <option>Elogios</option>
                            <option>Problemas Técnicos (site)</option>
                            <option>Outros</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-danger">Enviar</button>

                </form>
            </div>


        <div class="flex-container">
            
        <div>         
            <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5511962441455" target="_blank">
            <img src="./image/whatsapp-icone-1.png" alt="contato" width="45px" title="Whatsapp - Fale Conosco"></a>

            <a href="mailto:mindpill.pnl@gmail.com">
            <img src="./image/mail 12.png" alt="contato" width="55px">
            <i class="far fa-envelope fa-2x"></i></a>

            <a href="https://instagram.com/mindpill_pnl?igshid=9j17cudxace9" target="_blank">
            <img src="./image/instagram.png" alt="contato" width="45px" title="Whatsapp - Fale Conosco"> 

            <a href="https://www.youtube.com/channel/UCqQZ9_MGcUOUaskIf-3jAWg" target="_blank">
            <img src="./image/youtube.png" alt="contato" width="45px" title="Whatsapp - Fale Conosco"></a> 
    </div>  
    <br><hr><br>
       
            
</main>


<footer class="text-center" id="rodape">
    <div> © Mind Pill 2020</div>
    <br>
</footer>


<script src="./js/disc.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
</script>

</body>

</html>