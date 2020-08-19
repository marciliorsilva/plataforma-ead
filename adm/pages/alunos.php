<?php
include_once "../model/Login.class.php";

$objLogin = new  Login();
$objLogin->verificarLogado();
?>
<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Berlim - Pagina Administrador</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="../favicon2.ico" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="../plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../plugins/ionicons/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="../plugins/icon-kit/dist/css/iconkit.min.css">
    <link rel="stylesheet" href="../plugins/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="../plugins/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="../dist/css/theme.css">
    <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body name="alunos">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="wrapper">
        <?php include '../src/php/header-top.php'; ?>

        <div class="page-wrap">
            <?php include '../src/php/menu.php'; ?>
            <div class="main-content">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <i class="ik ik-users bg-blue"></i>
                                    <div class="d-inline">
                                        <a href="cadastrarAluno.php">
                                            <button type="button" class="btn btn-primary">Cadastrar aluno</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline">
                                        <h1>Alunos</h1>
                                    </div>
                                    <table id="data_table" class="table">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th class="nosort">Avatar</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th class="nosort">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>001</td>
                                                <td><img src="../img/users/1.jpg" class="table-user-thumb" alt=""></td>
                                                <td>Erich Heaney</td>
                                                <td>erich@example.com</td>
                                                <td>Disponível</td>
          
                                                <td>
                                                    <div class="table-actions">
                                                        <a href="#"><i class="ik ik-eye"></i></a>
                                                        <a href="#" title="editar"><i class="ik ik-edit-2"></i></a>
                                                        <a href="#" title="Bloquear"><i class="ik ik-slash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>002</td>
                                                <td><img src="../img/users/2.jpg" class="table-user-thumb" alt=""></td>
                                                <td>Abraham Douglas</td>
                                                <td>jgraham@example.com</td>
                                                <td>Disponível</td>
                                                <td>
                                                    <div class="table-actions">
                                                        <a href="#"><i class="ik ik-eye"></i></a>
                                                        <a href="#" title="editar"><i class="ik ik-edit-2"></i></a>
                                                        <a href="#" title="Bloquear"><i class="ik ik-slash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>003</td>
                                                <td><img src="../img/users/3.jpg" class="table-user-thumb" alt=""></td>
                                                <td>Roderick Simonis</td>
                                                <td>grant.simonis@example.com</td>
                                                <td>Disponível</td>
                                                <td>
                                                    <div class="table-actions">
                                                        <a href="#"><i class="ik ik-eye"></i></a>
                                                        <a href="#" title="editar"><i class="ik ik-edit-2"></i></a>
                                                        <a href="#" title="Bloquear"><i class="ik ik-slash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>004</td>
                                                <td><img src="../img/users/4.jpg" class="table-user-thumb" alt=""></td>
                                                <td>Christopher Henry</td>
                                                <td>henry.chris@example.com</td>
                                                <td>Disponível</td>
                                                <td>
                                                    <div class="table-actions">
                                                        <a href="#"><i class="ik ik-eye"></i></a>
                                                        <a href="#" title="editar"><i class="ik ik-edit-2"></i></a>
                                                        <a href="#" title="Bloquear"><i class="ik ik-slash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>005</td>
                                                <td><img src="../img/users/5.jpg" class="table-user-thumb" alt=""></td>
                                                <td>Sonia Wilkinson</td>
                                                <td>boyle.aglea@example.com</td>
                                                <td>Bloqueado</td>
                                                <td>
                                                    <div class="table-actions">
                                                        <a href="#"><i class="ik ik-eye"></i></a>
                                                        <a href="#" title="editar"><i class="ik ik-edit-2"></i></a>
                                                        <a href="#" title="Bloquear"><i class="ik ik-slash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <footer class="footer">
                <div class="w-100 clearfix">
                    <span class="text-center text-sm-left d-md-inline-block">Copyright © 2020 Berlim. Todos os direitos reservados.</span>
                </div>
            </footer>

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="../src/js/vendor/jquery-3.3.1.min.js"><\/script>')
    </script>
    <script src="../plugins/popper.js/dist/umd/popper.min.js"></script>
    <script src="../plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="../plugins/screenfull/dist/screenfull.js"></script>
    <script src="../plugins/moment/moment.js"></script>
    <script src="../plugins/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="../plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../dist/js/theme.min.js"></script>
    <script src="../js/calendar.js"></script>




</body>

</html>