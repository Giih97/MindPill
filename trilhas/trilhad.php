<?php
    require('../php/require/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" type="text/css" href="./css/trilha.css"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="icon" href="../image/logo01.png">
        <title>Mind Pill - Trilha D</title>
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
                include('../php/include/cabecalho-trilha.html');
            ?>
        </header>
        <div class="container ">
            <div class="row">
                
               <div class="col-md-6 my-5">
                    <img class="img img-fluid" src="../image/trilha.png" alt="" width=400>
                </div> 
                
                <div class="col-md-6 mx-auto my-5 text-center">
                    <div class="alert alert-danger">
                        <h1 class="display-4">PERFIL D</h1>
                        <p class="lead">Esta página <b>ESTÁ EM CONSTRUÇÃO</b> e é personalizada de acordo com resultado do teste <b>DISC</b>.</p>
                        <hr class="my-4">
                        <h3>DOMINÂNCIA</h3>
                        <!-- <a class="btn btn-primary btn-block" href="#" role="button">Leia mais</a> -->
                    </div>
                </div>
            </div>
        </div>

        <footer>© Mind Pill 2020</footer>
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