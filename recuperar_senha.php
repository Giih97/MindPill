<?php
    require('php/conexao.php');
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>Mind Pill - Recuperar Senha</title>
    </head>
    <body>
        <header>
            <!-- CABECALHO e MENU-->
            <?php
                include('cabecalho.html');
            ?>
        </header>

        <main>
            <div class="container">
                <div style="width: 18rem" class="mx-auto my-5 text-white">
                    <form method="post">
                        <h3>Recuperar senha</h3>
                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha: </label>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua nova senha" required>
                        </div>
                        <div class="form-group">
                            <label for="senha2">Confirme a senha: </label>
                            <input type="password" class="form-control" id="senha2" name="senha2" placeholder="Confirme sua nova senha" required>
                        </div>
                    
                        <input class="btn btn-block btn-primary mb-3" type="submit" value="Alterar Senha">
                        <input class="btn btn-block btn-primary mb-3" type="button" value="Voltar" onclick="window.location.href = 'index.php'">

                            <?php
                                require('./php/recuperarSenha.php');
                            ?>
                    </form>
                </div>
            </div>
        </main>
        <footer>© Mind Pill 2020</footer>
    </body>
</html>