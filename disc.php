<?php
    require('php/require/conexao.php');

    session_start();

    if(isset($_SESSION['id']) && $_SESSION['id'] <> ""){ //Verificar se existe alguma SESSION iniciada
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="icon" href="image/logo01.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        
        <style>
            body {
                background: rgb(85, 221, 187);
            }
            .lists .list {
                transition: all 0.2s linear;
            }
            .bg-verde-ecuro {
                background: rgb(0, 118, 87);
            }
            .btn-verde-ecuro {
                background: rgb(0, 118, 87);
                border: rgb(23, 152, 118);
            }
            .btn-verde-ecuro:hover {
                background: rgb(23, 152, 118);
            }
        </style>
        
        <title>DISC</title>
    </head>

    <body onselectstart="return false">
        <header>
            <!-- CABECALHO e MENU-->
            <?php
                include('php/include/cabecalho.html');
            ?>
        </header>

        <div class="container text-white">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>ATENÇÃO!!!!!! PAGINA EM CONSTRUÇÃO!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="lists row my-2 text-center justify-content-center overflow-hidden">
                <div style="height: 200px" class="list bg-verde-ecuro m-1 col-md rounded overflow-hidden" id="teste1" name="1">
                    <h1>1</h1>
                </div>
                <div style="height: 200px" class="list bg-verde-ecuro m-1 col-md rounded overflow-hidden" id="teste2" name="2">
                    <h1>2</h1>
                </div>
                <div style="height: 200px" class="list bg-verde-ecuro m-1 col-md rounded overflow-hidden" id="teste3" name="3">
                    <h1>3</h1>
                </div>
                <div style="height: 200px" class="list bg-verde-ecuro m-1 col-md rounded overflow-hidden" id="teste4" name="4">
                    <h1>4</h1>
                </div>
            </div>
   
            <div style="height: 170px; width: 400px;" class="lists row text-center justify-content-center overflow-hidden mx-auto">
                <div id="testep" class="list col" name="questoes" onmouseover="mostrarBotao()">
                    <?php
                        $sql = "SELECT * FROM disc";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($rows = $result->fetch_assoc()){
                    ?>
                            <div class="list-item bg-danger rounded m-1 py-2" draggable="true" id="<?php echo $rows['perfil']?>">
                        <?php echo utf8_encode($rows["pergunta"])?>
                    </div>
                    <?php
                            }
                        } else{
                            echo "Nenhum Pergunta Cadastrado!!!";
                        }
                    ?>
                </div>
            </div>
            <button class="btn btn-success btn-block btn-verde-ecuro" id="idDoBotao" style="visibility: hidden;" onclick="teste()">Finalizar teste</button>

            <footer class="text-center text-white py-4" id="rodape">
                <div> © Mind Pill 2020</div>
            </footer>
        </div>

 
        <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalCentralizado">Análise de Perfil Comportamental</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Queremos te presentear com uma trilha de técnicas de PNL adequada ao seu perfil, por isso precisamos te conhecer melhor.
                        Desta forma, é importante que você realize o preenchimento do teste conforme as orientações abaixo: </p> 
                        <ul>
                            <li>
                                Na parte inferior da tela existe um quadrante onde é apresentado algumas características.
                            </li>
                            <li> 
                                Na parte superior da tela existem retângulos numerados de 1 a 4.
                            </li>
                            <li>
                                Você deve analisar a característica, clicar e arrastar para um dos quadrantes indicando o seu nível de identificação, sendo 1 o que menos e 4 o que mais se identifica. 
                            </li>      
                            <li>  
                                Após arrastar todas as características, <b>click no botão que aparecerá!</b> 
                            </li>               
                        </ul>
                        <p>
                            Está etapa é muito importante para acertarmos na sua trilha, por isso lembre-se de preencher com atenção e ser bastante sincero! 
                            <br><br> 
                            Vamos lá...!
                        </p> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-verde-ecuro" data-dismiss="modal">Fechar</button>
                        <!-- <button type="button" class="btn btn-primary">Salvar mudanças</button> -->
                    </div>
                </div>
            </div>
        </div> 

        <script type="text/javascript">
            $(window).on('load',function(){
                $('#ExemploModalCentralizado').modal('show');
            });
        </script>

        <script src="./js/disc.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
        <?php
            } else{ //Redireciona para o inicio se nao tiver SESSION iniciada
                header("Location: ./index.php");
            }
        ?>
    </body>
</html>