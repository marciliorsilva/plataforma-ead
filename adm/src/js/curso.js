
function editar(id){
    document.getElementById('id').value = id;

    document.enviar_parametros.submit();
}
function excluir(id){

    img = document.getElementById('imagemCurso'+id).getAttribute('src');
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
        if (result.value) {
            $.post("../model/processar.php",{
                        id:id,
                        img:img,
                        metodo:'excluir-curso',
                        entidade:'curso'
                }, function(data){
                        
                        if(data == "1"){
                            Swal.fire({
                                title: '',
                                text: 'Curso exluido com sucesso.',
                                icon: 'success',
                                confirmButtonText: 'Fechar'
                            }).then((result) => {
                                if (result.value) {
                                    document.getElementsByClassName('cursos')[0].removeChild(document.getElementById(id));
                                }
                            });
                        
                        
                        }else if(data == "2"){
                            Swal.fire({
                                title: 'Erro ao excluir o curso.',
                                text: data,
                                icon: 'error',
                                confirmButtonText: 'Fechar'
                            }); 
                        }
                    
                });
        
        }
    })
}
//-----------------------------
function back(){
    window.history.back();
}

$(document).ready(function(){
    
    $('#tags').tagsinput('items');
   
    $("#formulario-cursos-editar").submit(function() {
       
        if($("#txtNome").val()== null || $("#txtNome").val() ==""){

            Swal.fire({
                title: 'Campo obrigatorio!',
                text: 'Digite o nome do curso',
                icon: 'warning',
                confirmButtonText: 'Fechar'
            });
    
        }else if($("#selectProfessores").val()== null || $("#selectProfessores").val() ==""){
            Swal.fire({
                title: 'Campo obrigatorio!',
                text: 'Selecione um professor',
                icon: 'warning',
                confirmButtonText: 'Fechar'
            });
        }else if($("#txtDescricao").val()== null || $("#txtDescricao").val() ==""){
            Swal.fire({
                title: 'Campo obrigatorio!',
                text: 'Informe uma descricao do curso',
                icon: 'warning',
                confirmButtonText: 'Fechar'
            });
        }else{
            var formData = new FormData(document.getElementById("formulario-cursos-editar"));
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
                        text: 'Dados alterado com sucesso.',
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
                        text: 'Erro ao editar o curso.',
                        icon: 'error',
                        confirmButtonText: 'Fechar'
                    }); 

                }else if(res == "3"){
                    Swal.fire({
                        title: '',
                        text: 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita',
                        icon: 'error',
                        confirmButtonText: 'Fechar'
                    }); 
                }
            });
        }

        return false;
    });
    //-------------------------
    $(document).ready(function(){
     
        $("#formulario-cursos-cadastrar").submit(function() {
  
            if($("#txtNome").val()== null || $("#txtNome").val() ==""){
    
                Swal.fire({
                    title: 'Campo obrigatorio!',
                    text: 'Digite o nome do curso',
                    icon: 'warning',
                    confirmButtonText: 'Fechar'
                });
        
            }else if($("#selectProfessores").val()== null || $("#selectProfessores").val() ==""){
                Swal.fire({
                    title: 'Campo obrigatorio!',
                    text: 'Selecione um professor',
                    icon: 'warning',
                    confirmButtonText: 'Fechar'
                });
            }else if($("#txtDescricao").val()== null || $("#txtDescricao").val() ==""){
                Swal.fire({
                    title: 'Campo obrigatorio!',
                    text: 'Informe uma descricao do curso',
                    icon: 'warning',
                    confirmButtonText: 'Fechar'
                });
            }else{
                var formData = new FormData(document.getElementById("formulario-cursos-cadastrar"));
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
                            text: 'Curso cadastrado com sucesso.',
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
                            text: 'Erro ao cadastrar o curso.',
                            icon: 'error',
                            confirmButtonText: 'Fechar'
                        }); 
                    }
                });
            }

            return false;
        });

    });

});