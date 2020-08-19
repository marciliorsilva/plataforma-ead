<?php
include_once "../model/Login.class.php";
include_once "../model/Controller.class.php";
$controller = new Controller();

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
    <link rel="stylesheet" href="../dist/css/theme.css">
    <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body >


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
                                    <i class="ik ik-plus-circle bg-blue"></i>
                                    
                                    <button onclick="back()" type="button" class="btn btn-primary">Voltar</button><br><br>

                                    
                                    <div class="d-inline">
                                        <h5>Cadastro de Curso</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form id="formulario-cursos-cadastrar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Nome da aula</label>
                                                    <input type="text" id="txtNome" name="nome" class="form-control" placeholder="Nome">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="input">Tag do curso</label>
                                                    <input type="text" id="tags" name="tags" class="form-control" value="">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                
                                                    <div class="form-group">
                                                        <label for="">Professor(a)</label>
                                                        <select class="form-control" name="idProfessor" id="selectProfessores" >
                                                        <?php $controller->selectOptionProfessores();?>
                                                            
                                                        </select>
                                                    </div>
                                                
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Anexe uma imagem para este curso</label>
                                                    <input type="file" id="txtImg" name="img" accept=".png, .jpg, .jpeg, .svg" class="file-upload-default" >
                                                    <div class="input-group col-xs-12">
                                                        <input type="text"  class="form-control file-upload-info" disabled placeholder="Imagem">
                                                        <span class="input-group-append">
                                                            <button class="file-upload-browse btn btn-primary" type="button">Selecionar</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Descrição do Curso</label>
                                                    <textarea id="txtDescricao" name="descricao" class="form-control" rows="6"></textarea>
                                                </div>
                                            </div>
                                            <input type="hidden" name="metodo" value="cadastrar-curso">
                                            <input type="hidden" name="entidade" value="curso">

                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary" style="float: right;">Cadastrar Treinamento</button>
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
    <script src="../plugins/select2/dist/js/select2.min.js"></script>
    <script src="../plugins/summernote/dist/summernote-bs4.min.js"></script>
    <script src="../plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="../plugins/jquery.repeater/jquery.repeater.min.js"></script>
    <script src="../plugins/mohithg-switchery/dist/switchery.min.js"></script>
    <script src="../dist/js/theme.min.js"></script>
    <script src="../js/form-advanced.js"></script>
    <script src="../js/form-components.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="../src/js/curso.js"></script>
   

</body>

</html>