<?php

session_start();

require '../model/init.php';
require '../model/check.php';
require '../model/destroySession.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berlim Digital - A Brand New Horizon!</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="../img/favicon.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


</head>

<body>

    <div class="voltar">
        <a href="index.php"><i class="fas fa-chevron-left"></i> Voltar</a>
    </div>

    <div class="container">
        <div class="video">

            <div class="flex-title">
                <div class="title">
                    <span>Instagram e Facebook Ads</span><br>
                    <span>Aula 3 - Métricas de resultados</span>
                </div>
                <div>
                    <button><img src="img/classrom.svg" height="17"> Abrir Classrom</button>
                </div>
            </div>

            <video id="video" controls>
                <source src="1.mp4" type="video/mp4">
                </source>
            </video>

        </div>
    </div>


    <footer>
        <p>Berlim Digital - 2020. Todos os direitos Reservados.</p>
    </footer>

</body>

</html>