<?php
include_once "../model/Login.class.php";
include_once "../model/Controller.class.php";

$objLogin = new  Login();
$objController = new  Controller();
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
    <link rel="stylesheet" href="i../plugins/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="../plugins/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="../plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../dist/css/theme.css">
    <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
       
    </style>
    

</head>

<body  onload="atualizar();">
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
                                    <i class="ik ik-clipboard bg-blue"></i>
                                    <div class="d-inline">
                                        <h5>Cursos</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix cursos">

                        <div class="col-xl-3 col-md-6" style="margin-right:0px;">
                            <div class="card sale-card">
                                <a href="cadastrarCurso.php">
                                    <div id="add-curso" class="card-block text-center" style="height: 305px;">
                                        <div class="icon" style="font-size: 49px; padding-top: 40%;">
                                            <i class="ik ik-plus"></i>
                                        </div>
                                        Cadastrar Curso
                                    </div>
                                </a>
                            </div>
                        </div>
                       

                        
                        <form action="editarCurso.php" method="post" name="enviar_parametros" >
                            <input type="hidden" id="id" name="id" value="" />            
                        </form>
                        <form action="cadastrarAula.php" method="post" name="enviar_parametros_aula" >
                            <input type="hidden" id="idCurso" name="id" value="" />            
                        </form>
                        <form action="editarAula.php" method="post" name="enviar_dadosAulas_editar" >
                            <input type="hidden" id="idAula" name="idAula" value="" />            
                        </form>
                        
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
    <div class="modal fade full-window-modal"  id="fullwindowModal" tabindex="-1" role="dialog" aria-labelledby="fullwindowModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tituloCursoAula"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row  aulas"  id="listarAulasCurso"></div>
                                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    
                </div>
            </div>
        </div>
    </div>  <div class="modal fade edit-layout-modal" id="listarAlunos" tabindex="-1" role="dialog" aria-labelledby="listarAlunosLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tituloCursoAlunos"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                <input class="form-control" id="pesquisa" type="text" placeholder="Pesquisar..">       
                                     
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="tabCursoAlunos" >
                                            <thead>
                                                <tr> 
                                                    
                                                    <th>Nome</th>
                                                    <th>Email</th>
                                                    <th>Status</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody id="tbAlunosCursos">
                
                                            </tbody>
                                                            
                                        </table>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
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
    <script src="../dist/js/theme.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="../js/datatables.js"></script>
    
    <script src="../src/js/curso.js"></script>
    <script type='text/javascript'>
        function atualizar(){
            
            const div = document.getElementsByClassName('cursos')[0];  
            div.insertAdjacentHTML('beforeEnd', '<?php $objController->listarCursos();?>');
        }

        function addAula(id){
           
            document.getElementById('idCurso').value = id;

            document.enviar_parametros_aula.submit();
        }

        function editarAula(id){
            
            document.getElementById('idAula').value = id;

            document.enviar_dadosAulas_editar.submit();
        }

        function listarAulas(id){
            document.getElementById('fullwindowModal').setAttribute('data-id', id);
            $.post("../model/processar.php",{
                id:id,
                metodo:'listar',
                entidade:'aula'
            }, function(data){
                document.getElementById('tituloCursoAula').innerHTML = $("#nomeCurso"+id).html() + " - Lista de aulas";
                document.getElementById('listarAulasCurso').innerHTML = " ";
                document.getElementById('listarAulasCurso').innerHTML = data;

                    
            });

           
        }

        function listarAlunosCurso(id){
            document.getElementById('fullwindowModal').setAttribute('data-id', id);
            $.post("../model/processar.php",{
                id:id,
                metodo:'listarAlunos',
                entidade:'curso'
            }, function(data){
                document.getElementById('tituloCursoAlunos').innerHTML = $("#nomeCurso"+id).html() + " - Alunos";
                document.getElementById('tbAlunosCursos').innerHTML = " ";
                document.getElementById('tbAlunosCursos').innerHTML = data;

                    
            });

           
        }

        function excluirAula(id){
                     
    
            Swal.fire({
                title: 'Você tem certeza?',
                text: "Você não poderá reverter isso!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, exclua-o!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                
                var img = document.getElementById('divImgAula'+id).getAttribute("data-img");
                if (result.value) {
                    $.post("../model/processar.php",{
                                id:id,
                                img:img,
                                metodo:'excluir-aula',
                                entidade:'aula'
                        }, function(data){
                                
                                if(data == "1"){
                                    Swal.fire({
                                        title: '',
                                        text: 'Aula exluida com sucesso.',
                                        icon: 'success',
                                        confirmButtonText: 'Fechar'
                                    }).then((result) => {
                                        if (result.value) {
                                            document.getElementsByClassName('aulas')[0].removeChild(document.getElementById("aula"+id));
                                            idCurso = document.getElementById('fullwindowModal').getAttribute("data-id");
                                            var qtdAulas = $('#qtdeAulas'+idCurso).html();               
                                            $('#qtdeAulas'+idCurso).html(qtdAulas-1);
                                            
                                           
                                        }
                                    });
                                
                                
                                }else if(data == "2"){
                                    Swal.fire({
                                        title: 'Erro ao excluir a aula.',
                                        text: data,
                                        icon: 'error',
                                        confirmButtonText: 'Fechar'
                                    }); 
                                }
                            
                        });
                
                }
            })
        }
        $(document).ready(function(){
            $("#pesquisa").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#tbAlunosCursos tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>


</body>

</html>