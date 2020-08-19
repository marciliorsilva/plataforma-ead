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
    <!-- <a href="../model/logout.php">Sair</a> -->
    <div class="container">

        <div class="video">
            <a href="../model/logout.php"><i class="fas fa-angle-left"></i> Voltar</a>

            <div class="title">
                <span>Instagram e Facebook Ads</span><br>
                <span>Aula 3 - Métricas de resultados</span>
            </div>

            <video id="video" controls>
                <source src="../1.mp4" type="video/mp4">
                </source>
            </video>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit eius voluptates officiis, repudiandae tenetur ipsum esse  
            m ipsum dolor, sit amet consectetur adipisicing elit. Impedit eius voluptates officiis, repudiandae tenetur ipsum esse
            m ipsum dolor, sit amet consectetur adipisicing elit. Impedit eius voluptates officiis, repudiandae tenetur ipsum esse
            m ipsum dolor, sit amet consectetur adipisicing elit. Impedit eius voluptates officiis, repudiandae tenetur ipsum esse
            m ipsum dolor, sit amet consectetur adipisicing elit. Impedit eius voluptates officiis, repudiandae tenetur ipsum esse
            m ipsum dolor, sit amet consectetur adipisicing elit. Impedit eius voluptates officiis, repudiandae tenetur ipsum esse
            m ipsum dolor, sit amet consectetur adipisicing elit. Impedit eius voluptates officiis, repudiandae tenetur ipsum esse
            </p>


            <footer>
                Berlim Digital - 2020. Todos os direitos Reservados.
            </footer>
        </div>

        <div class="chat">
            <h2>CHAT</h2>
            <div id="disqus_thread"></div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        (function() {
            var d = document,
                s = d.createElement('script');
            s.src = 'https://berlim-digital.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>

    <script id="dsq-count-scr" src="//berlim-digital.disqus.com/count.js" async></script>
</body>

</html>