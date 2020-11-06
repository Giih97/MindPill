<?php
    require('php/require/conexao.php');
    session_start();

    if(isset($_SESSION['id']) && $_SESSION['id'] <> ""){
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

    #tabela {
        position: absolute;
        left: 20%;
        top: 30%;
        margin-top: -110px;
        margin-left: -40px;
        background-color: rgb(255, 235, 205);


    }

    table {
        background-color: rgb(255, 235, 205);
    }

    #rodape {
        position: absolute;
        left: 50%;
        top: 100%;
        margin-top: -110px;
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
        <div class="container rounded" id="tabela">


            <div class="text-center">
                <h3> Informações dos Parceiros</h3>
            </div>
            <table class="table table-responsive table-light">

                <thead>
                    <div class="row ">
                        <tr class="table-light ">
                            <th scope="col" style="width:18%">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col" style="width:18%">Telefone</th>
                            <th scope="col"> Especialidades</th>
                        </tr>
                    </div>
                </thead>

                <tbody>
                    <?php
                   $sql = "SELECT * FROM parceiros";
                   $result = $conn->query($sql);
                   if ($result->num_rows > 0){
                   while($rows=$result->fetch_assoc()){
            
                   ?>
                    <tr class="table-light">
                        <td><?php echo utf8_encode($rows ['nome'])?> </td>
                        <td><?php echo utf8_encode($rows ['email'])?></td>
                        <td><?php echo utf8_encode($rows ['telefone'])?></td>
                        <td><?php echo utf8_encode($rows ['descricao'])?></td>
                    </tr>
                    <?php
                       }
                    }else {
                echo "Nenhum parceiro cadastrado";
              } 
                      ?>
                </tbody>


            </table>
        </div>
</main>

<footer class="text-center" id="rodape">
    <div> © Mind Pill 2020</div>
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
<?php
    } else{
        header("Location: ./index.php");
    }
?>
</body>

</html>