<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="icon" href="image/logo01.png">

        <style>
            body {
                background: rgb(85, 221, 187);
            }
            .vermelho{
                color: rgb(178,3,4);
            }
            .senhaemailIncorreto{
                visibility: hidden;
            }
        </style>
        
        <title>Mind Pill</title>
    </head>
    <body>
       <div class="container pt-5 text-white">
            <h1 class="text-center">Bem-vindo ao Mind Pill!</h1>
            <div class="row mt-5">
                <div class="col-md-8">
                    <img class="img img-fluid" src="./image/cyber-brain.png" alt="" width=600>
                </div>

                <div class="col-md-4">
                    <form method="post" class="was-validated py-4">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Digite o email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha:</label>
                            <input type="password" class="form-control" id="senha" placeholder="Digite a senha" name="senha" required>
                        </div>
                        <p class="bold vermelho" id="senhaemailIncorreto">
                        <?php
                            require('php/require/verificarUsuario.php');
                        ?>
                        </p>
                        <button type="submit" class="btn btn-primary btn-block">Envio!</button>
                        <h6 class="text-center mt-2">
                            <a href="cadastro.php">Cadastre-se</a> | <!--<a href="recuperar_senha.php">Esqueci a senha</a> <br> -->
                            <a href="cadastroParceiro.php">Seja um parceiro</a>
                        </h6>
                    </form>
                </div>
            </div>
            <footer class="text-center text-white py-4" id="rodape">
                <div> © Mind Pill 2020</div>
            </footer>
       </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>