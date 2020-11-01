<?php
    require('php/conexao.php');
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/parceiros.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>Mind Pill - Parceiros</title>
        <style>
            body {
                background: rgb(85, 221, 187);
            }
        </style>

    </head>
    <body>
        <header>
            <!-- CABECALHO e MENU-->
            <?php
                include('cabecalho.html');
            ?>
        </header>
            
            <main class="container">
                <?php
                    $sql = "SELECT * FROM parceiros";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($rows = $result->fetch_assoc()){
                ?>
                            <div class="card">
                                <div class="imgBx" data-text="Design">
                                    <img src="image/<?php echo $rows["imagem"]?>" alt="">
                                </div>
                                <div class="content">
                                    <div>
                                        <h3><?php echo $rows["nome"]?></h3>
                                        <p><b>Contato:</b> <?php echo $rows["email"]?></p>
                                        <p><b>Tel:</b> <?php echo $rows["telefone"]?></p>
                                        <p><?php echo utf8_encode($rows["descricao"])?></p>
                                        <a href="#">Leia mais</a>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    }
                ?>
            <main>

        <footer class="text-center py-4">© Mind Pill 2020</footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous"></script>
    </body>
    
</html>