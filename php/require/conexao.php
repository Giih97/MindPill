<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mindpill";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("<h3>A conexao com o BD falhou.</h3><br>".mysqli_connect_error());
	} else {
		//echo "CONECTADO";
	}			
?>