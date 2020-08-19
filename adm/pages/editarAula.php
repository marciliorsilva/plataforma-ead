<?php
include_once "../model/Login.class.php";
include_once "../model/CrudAula.class.php";
$objLogin = new  Login();
$objLogin->verificarLogado();
$idAula = $_POST['idAula'];
$objCrud = new CrudAula();
$objAula = $objCrud->consultarAulaId($idAula);


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
                                        <h5>Editar Aula</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                <form id="formulario-aulas-editar">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Título da aula</label>
                                                <input type="text" id="txtTitulo" class="form-control" name="titulo" placeholder="Nome" value="<?php echo $objAula->getTitulo(); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="input">Data da aula</label>
                                                <input type="text" id="data" class="form-control" name="data" placeholder="00/00/0000" value="<?php echo $objAula->getData(); ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="input">Hora da Aula</label>
                                                <input type="text" id="txtHora" class="form-control" name="hora" placeholder="Exemplo: 20h" value="<?php echo $objAula->getHora();?>">
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Descrição da aula</label>
                                                <textarea id="txtDescricao"  class="html-editor form-control" name="descricao" rows="6"><?php echo $objAula->getDescricao();?></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Link do Iframe do vídeo</label>
                                                <textarea id="txtLink" class="html-editor form-control" name="link" rows="4"><?php echo $objAula->getLink();?></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Anexe uma imagem para esta aula</label>
                                                    <input  type="file" id="txtImg" accept=".png, .jpg, .jpeg, .svg"  name="img" class="file-upload-default">
                                                    <div class="input-group col-xs-12">
                                                        <input  type="text" value="<?php echo $objAula->getImg();?>" class="form-control file-upload-info" disabled placeholder="Imagem">
                                                        <span class="input-group-append">
                                                            <button class="file-upload-browse btn btn-primary" type="button">Selecionar</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="metodo" value="editar-aula">
                                            <input type="hidden" name="img-temp" value="<?php echo $objAula->getImg();?>">
                                            <input type="hidden" name="entidade" value="aula">
                                            <input type="hidden" name="idAula" value="<?php echo $objAula->getId();?>">

                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary" style="float: right;">Salvar alterações</button>
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
   
    <script type="text/javascript">
        
        function back(){
           window.history.back();
        }
        $(document).ready(function(){
            $("#formulario-aulas-editar").submit(function() {
                
                if($("#txtTitulo").val()== null || $("#txtTitulo").val() ==""){

                    Swal.fire({
                        title: 'Campo obrigatorio!',
                        text: 'Informe o titulo do aula',
                        icon: 'warning',
                        confirmButtonText: 'Fechar'
                    });

                }else if($("#data").val()== null || $("#data").val() ==""){
                    Swal.fire({
                        title: 'Campo obrigatorio!',
                        text: 'Informe a data da aula',
                        icon: 'warning',
                        confirmButtonText: 'Fechar'
                    });
                }else if($("#txtHora").val()== null || $("#txtHora").val() ==""){
                    Swal.fire({
                        title: 'Campo obrigatorio!',
                        text: 'Informe a hora da aula',
                        icon: 'warning',
                        confirmButtonText: 'Fechar'
                    });
                }else if($("#txtDescricao").val()== null || $("#txtDescricao").val() ==""){
                    Swal.fire({
                        title: 'Campo obrigatorio!',
                        text: 'Informe a descrição da aula',
                        icon: 'warning',
                        confirmButtonText: 'Fechar'
                    });
                }else if($("#txtLink").val()== null || $("#txtLink").val() ==""){
                    Swal.fire({
                        title: 'Campo obrigatorio!',
                        text: 'Informe o link da aula',
                        icon: 'warning',
                        confirmButtonText: 'Fechar'
                    });
                    
                }else{
                    
                    var formData = new FormData(document.getElementById("formulario-aulas-editar"));
                    formData.append("dato", "valor");
                    //formData.append(f.attr("name"), $(this)[0].files[0]);
                    $.ajax({
                        url: "../model/processar.php",
                        type: "post",
                        dataType: "html",
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false
                    }).done(function(res){
                        
                        if(res == "1"){
                            Swal.fire({
                                title: '',
                                text: 'Dados editados com sucesso.',
                                icon: 'success',
                                confirmButtonText: 'Fechar'
                            }).then((result) => {
                                if (result.value) {
                                    window.location.assign("curso.php"); 
                                }
                            });
                            
                        
                        }else if(res == "2"){
                            Swal.fire({
                                title: '',
                                text: 'Erro ao editar a aula.',
                                icon: 'error',
                                confirmButtonText: 'Fechar'
                            }); 
                        }
                    });
                

                }
                return false;
                });

        });

      
    </script>


</body>

</html>