<?php
/*
session_start();

require '../model/init.php';
require '../model/check.php';
require '../model/destroySession.php';*/
include_once "../model/Controller.class.php";

$objController = new Controller();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berlim Digital - A Brand New Horizon!</title>
    <link rel="icon" href="../img/favicon.png" />

    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/menu.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>

<body>

    <header>
        <nav>
            <div class="header-div-1">
                <div id="open"><i class="fas fa-bars"></i></div>
                <div><img height="70" src="img/img_0002.svg" alt="Berlim Digital"></div>
                <div>Aulas online <span>&nbsp;&nbsp;Beta°</span></div>
            </div>

            <div class="header-div-2">
                <a href="https://api.whatsapp.com/send?phone=5581982022720">
                    <div class="tooltips"><img height="15"
                            src="img/img_00013.svg" alt="Whatsapp" srcset="">
                        Fale Conosco <span>09h às 18h</span></div>
                </a>
                <div class="logout"><a href="../model/logout.php">Sair</a></div>
            </div>
        </nav>
    </header>


    <div id="nav-content" tabindex="0">
        <span id="close" style="float: right; color: white; cursor:pointer;"><img height="15" width="15"
                src="img/close.png" /></span>

        <div class="flex-nav-content"
            style="height: 100%; display: flex; flex-direction:  column; justify-content: space-between;">
            <div>
                <p>
                    <a href="https://api.whatsapp.com/send?phone=5581982022720"><img height="15" src="img/img_00013.svg"
                            alt="Whatsapp" srcset=""> Fale Conosco</a>
                </p><br>
                <p>Aproveite para tirar suas dúvidas sobre a plataforma em nosso horário de atendimento: das 9h às 19h.
                </p>
            </div>

            <div>
                <a href="../model/logout.php">
                    <span>Sair</span>
                </a>
            </div>
        </div>

    </div>

    <?php $objController->listarCursosAluno(1); ?>


    <!--
    <section class="container-lessons">
        <section class="accordion">
            <input type="checkbox" id="handle1">

            <h2 class="handle">
                <label for="handle1">
                    <div>
                        <img src="img/img_0008.svg">
                        Aula 1 - Estratégias de otimizações
                        <span class="date">14.05.2020 | 19h</span>
                    </div>
                    <span class="arrow"></span>
                </label>
            </h2>
            <div class="content">
                <div class="first-div-content">
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/Ayq0zc157tk?rel=0&amp;controls=0&amp;showinfo=0"
                        frameborder=”0″ allowfullscreen></iframe>
                </div>

                <div class="flex-content">
                    <div>
                        <p><strong>Overall Impression:</strong> A deep reddish-copper, moderately strong, malty, complex
                            Trappist
                            ale with rich malty flavors, dark or dried fruit esters, and light alcohol blended together
                            in a
                            malty
                            presentation that still finishes fairly dry.</p>
                    </div>
                    <div>
                        <a href="2e6f9b0d5885b.php"><img class="a" src="img/img_0012.svg"> Assistir</a>
                    </div>
                </div>
            </div>


        </section>


        <section class="accordion">
            <input type="checkbox" id="handle2">
            <h2 class="handle">
                <label for="handle2">
                    <div>
                        <img src="img/img_0007.svg">
                        Aula 2 - A plataforma
                        <span class="date">14.05.2020 | 19h</span>
                    </div>
                    <span class="arrow"></span>
                </label>
            </h2>
            <div class="content">
                <div>
                    <p><strong>Overall Impression:</strong> A deep reddish-copper, moderately strong, malty, complex
                        Trappist
                        ale with rich malty flavors, dark or dried fruit esters, and light alcohol blended together in a
                        malty
                        presentation that still finishes fairly dry.</p>
                </div>

                <div>
                    <p><strong>Overall Impression:</strong> A deep reddish-copper, moderately strong, malty, complex
                        Trappist
                        ale with rich malty flavors, dark or dried fruit esters, and light alcohol blended together in a
                        malty
                        presentation that still finishes fairly dry.</p>
                </div>
            </div>
        </section>

        <section class="accordion">
            <input type="checkbox" id="handle3">
            <h2 class="handle">
                <label for="handle3">
                    <div>
                        <img src="img/img_0007.svg">
                        Aula 3 - Métricas de resultados
                        <span class="date">14.05.2020 | 19h</span>
                    </div>
                    <span class="arrow"></span>
                </label>
            </h2>
            <div class="content">
                <div>
                    <p><strong>Overall Impression:</strong> A deep reddish-copper, moderately strong, malty, complex
                        Trappist
                        ale with rich malty flavors, dark or dried fruit esters, and light alcohol blended together in a
                        malty
                        presentation that still finishes fairly dry.</p>
                </div>

                <div>
                    <p><strong>Overall Impression:</strong> A deep reddish-copper, moderately strong, malty, complex
                        Trappist
                        ale with rich malty flavors, dark or dried fruit esters, and light alcohol blended together in a
                        malty
                        presentation that still finishes fairly dry.</p>
                </div>
            </div>
        </section>
    </section>
    -->
    <section class="container-3">
        <div class="sub-1">
            <img src="img/img_0008.png">

            <div class="sub-content-1">
                <div>
                    <h2>A MAIOR AULA DA BERLIM DIGITAL</h2>
                </div>
                <div>
                    <p>50h de Planejamento digital, Redes Sociais, Vendas online, Conteúdo e SEO, Inbound, Facebook e
                        instagram ads, Mídia online avançada e Google Ads.</p>
                </div>

                <div>
                    <span class="title">A MAIOR AULA DA BERLIM DIGITAL</span>
                    <p class="sub-title">50h de Planejamento digital, Redes Sociais, Vendas online, Conteúdo e SEO,
                        Inbound, Facebook e
                        instagram ads, Mídia online avançada e Google Ads.</p>
                </div>
            </div>
        </div>

        <div class="sub-2">
            <span>INTERESSOU?</span>
            <p>Aguarde o cupom pelo professor</p>
        </div>
    </section>


    <footer>
        <p>Berlim Digital - 2020. Todos os direitos Reservados.</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/facf9fa52c.js"></script>
    <script src="js/home.js"></script>
</body>

</html>