<?php
    require('php/conexao.php');
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mind Pill</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style>
            body {
                background: rgb(85, 221, 187);
            }
            .vermelho{
                color: rgb(178,3,4);
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

        <div class="container">
            <div style="width: 18rem" class="mx-auto my-5 text-white">
                <form method="post">
                    <div class="form-group">
                        <label for="nome">Nome: </label>
                        <input class="form-control" id="nome" type="text" name="nome" placeholder="Digite seu nome" requerid>
                    </div>
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" requerid>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha: </label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" requerid>
                    </div>
                    <div class="form-group">
                        <label for="senha2">Confirme a senha: </label>
                        <input type="password" class="form-control" id="senha2" name="senha2" placeholder="Confirme sua senha" requerid>
                    </div>
                
                    <input class="btn btn-block btn-primary mb-3" type="submit" value="Cadastrar">
                    <input class="btn btn-block btn-primary mb-3" type="button" value="Voltar" onclick="window.location.href = 'index.php'">

                        <?php
                            require('php/cadastrarUsuario.php');
                            $cadastro();
                        ?>


                </form>
            </div>
        </div>
        <footer class="text-center py-5">© Mind Pill 2020</footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>