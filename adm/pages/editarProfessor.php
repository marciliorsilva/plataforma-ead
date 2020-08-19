<?php
include_once "../model/Login.class.php";
include_once "../model/CrudProfessor.class.php";

$objLogin = new  Login();
$objCrud = new CrudProfessor();
$objLogin->verificarLogado();
$id = $_POST['id'];
$professor = $objCrud->consultarProfessorId($id);

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
    <link rel="stylesheet" href="../dist/css/theme.css">
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

                                        <h5>Editar de Professor</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">

                                    <form id="formulario-professor-editar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Nome</label>
                                                    <input  type="text" id="txtNome" value="<?php echo $professor->getNome(); ?>" class="form-control" placeholder="Nome">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input  type="text" id="txtEmail" value="<?php echo $professor->getEmail(); ?>" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <input type="hidden" id="txtId" value="<?php echo $id; ?>" />

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="../js/datatables.js"></script>
    <script src="../src/js/professor.js"></script>


    <script>
     

       
    </script>
    <script>
     
    </script>


</body>

</html>