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
    <link rel="stylesheet" href="../plugins/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="../plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="../plugins/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="../plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="../plugins/mohithg-switchery/dist/switchery.min.css">
    <link rel="stylesheet" href="../dist/css/theme.min.css">
    <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body name="curso">


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
                                <button onclick="back()" type="button" class="btn btn-primary">Voltar</button><br><br>
                                    <div class="d-inline">
                                        <h5>Cadastro de alunos</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Nome</label>
                                                    <input required type="text" class="form-control" placeholder="Nome">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">E-mail</label>
                                                    <input required type="text" class="form-control" placeholder="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Este aluno pertence a quais cursos?</label>
                                                <div class="dt-responsive">
                                                    <table class="table table-striped table-bordered nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th>Nome dos cursos</th>
                                                                <th>Pertence?</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Facebook</td>
                                                                <td>
                                                                    <div class="custom-control custom-checkbox pl-1 align-self-center">
                                                                        <label class="custom-control custom-checkbox mb-0">
                                                                            <input type="checkbox" class="custom-control-input">
                                                                            <span class="custom-control-label"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Google ADS
                                                                </td>
                                                                <td>
                                                                    <div class="custom-control custom-checkbox pl-1 align-self-center">
                                                                        <label class="custom-control custom-checkbox mb-0">
                                                                            <input type="checkbox" class="custom-control-input">
                                                                            <span class="custom-control-label"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><br>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button class="btn btn-primary">Cadastrar Aluno</button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
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
    <script src="../plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../dist/js/theme.min.js"></script>
    <script src="../js/datatables.js"></script>


    <script>
        $(".select2").select2();

        $('#tags').tagsinput('items');

        function back(){
           window.history.back();
        }
    </script>


</body>

</html>