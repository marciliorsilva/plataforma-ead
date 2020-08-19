<?php
include_once "../model/Login.class.php";
include_once "../model/Controller.class.php";


$objLogin = new  Login();
$objController = new Controller();
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
    <link rel="stylesheet" href="../plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../dist/css/theme.css">
    <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body onload="atualizarTabela();">
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
                                        <a href="cadastrarProfessor.php">
                                            <button type="button" class="btn btn-primary">Cadastrar Professor</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card">
                            <div class="card-header d-block">
                                <h3>Professores</h3>
                            </div>
                            <div class="card-body">
                                <div class="dt-responsive">
                                    <table id="scr-vrt-dt" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                
                                                    <th>Nome</th>
                                                    <th>Email</th>
                                                    <th>Status</th>
                                                    <th class="nosort">&nbsp;</th>
                                                </tr>
                                                </thead>
                                                <tbody id="tbBodyProfessor">
    
                                                </tbody>
                                                    
                                    </table>
                                    <form action="editarProfessor.php" method="post" name="enviar_parametros" >
                                    <input type="hidden" id="id" name="id" value="" />
                                  
                                    
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="../js/datatables.js"></script>
    <script src="../src/js/professor.js"></script>
    <script type='text/javascript'>
        //funcao para atualizar tabela quando 
        function atualizarTabela(){
            
            document.getElementById('tbBodyProfessor').innerHTML = " ";
            document.getElementById('tbBodyProfessor').innerHTML = '<?php $objController->listarProfessores();?>';
        }
    </script>

    




</body>

</html>