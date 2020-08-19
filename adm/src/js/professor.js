function back(){
    window.history.back();
}
//--------
function editar(id){
    document.getElementById('id').value = id;
   
    document.enviar_parametros.submit();
}
function excluir(id){
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
                        metodo:'excluir',
                        entidade:'professor'
                }, function(data){
                        
                        if(data == "1"){
                            Swal.fire({
                                title: '',
                                text: 'Professor exluido com sucesso.',
                                icon: 'success',
                                confirmButtonText: 'Fechar'
                            }).then((result) => {
                                if (result.value) {
                                    document.getElementById('tbBodyProfessor').removeChild(document.getElementById(id));
                                }
                            });
                          
                        
                        }else if(data == "2"){
                            Swal.fire({
                                title: 'Erro ao excluir o professor.',
                                text: data,
                                icon: 'error',
                                confirmButtonText: 'Fechar'
                            }); 
                        }
                    
                });
           
        }
    })
}
//--------------
function checarEmail(){
    if($("#txtEmail").val().indexOf('@')==-1 || $("#txtEmail").val().indexOf('.')==-1 ){
        return false;
    }

}

$(document).ready(function(){
    $("#formulario-professor-editar").submit(function() {

        if($("#txtNome").val()== null || $("#txtNome").val() ==""){
        
            Swal.fire({
                title: 'Campo obrigatorio!',
                text: 'Digite o nome do professor',
                icon: 'warning',
                confirmButtonText: 'Fechar'
            });
            
        }else if($("#txtEmail").val()== null || $("#txtEmail").val() ==""){
            Swal.fire({
                title: 'Campo obrigatorio!',
                text: 'Digite o email do professor',
                icon: 'warning',
                confirmButtonText: 'Fechar'
            });
        }else{

            if(checarEmail() == false){
                
                Swal.fire({
                    title: 'Email invalido',
                    text: 'Digite um email valido',
                    icon: 'warning',
                    confirmButtonText: 'Fechar'
                });

            }else{
                
                var id = $("#txtId").val();
                
                var nome = $("#txtNome").val();
                var email = $("#txtEmail").val();
             
                $.post("../model/processar.php",{
                        id:id,
                        email:email,
                        nome:nome,
                        metodo:'editar',
                        entidade:'professor'
                }, function(data){
                        
                        if(data == "1"){
                            Swal.fire({
                                title: '',
                                text: 'Dados editado com sucesso.',
                                icon: 'success',
                                confirmButtonText: 'Fechar'
                            }).then((result) => {
                                if (result.value) {
                                    window.location.assign("professores.php"); 
                                }
                            });
                          
                        
                        }else if(data == "2"){
                            Swal.fire({
                                title: '',
                                text: 'Erro ao editar o professor.',
                                icon: 'error',
                                confirmButtonText: 'Fechar'
                            }); 
                        }
                    
                });
            }

        }

    
        return false;
    });
    


});
//--------------------
$(document).ready(function(){
    $("#formulario-professor-cadastrar").submit(function() {

        if($("#txtNome").val()== null || $("#txtNome").val() ==""){
        
            Swal.fire({
                title: 'Campo obrigatorio!',
                text: 'Digite o nome do professor',
                icon: 'warning',
                confirmButtonText: 'Fechar'
            });
            
        }else if($("#txtEmail").val()== null || $("#txtEmail").val() ==""){
            Swal.fire({
                title: 'Campo obrigatorio!',
                text: 'Digite o email do professor',
                icon: 'warning',
                confirmButtonText: 'Fechar'
            });
        }else{

            if(checarEmail() == false){
                
                Swal.fire({
                    title: 'Email invalido',
                    text: 'Digite um email valido',
                    icon: 'warning',
                    confirmButtonText: 'Fechar'
                });

            }else{

                
                var nome = $("#txtNome").val();
                var email = $("#txtEmail").val();
             
                $.post("../model/processar.php",{
                        email:email,
                        nome:nome,
                        metodo:'cadastrar',
                        entidade:'professor'
                }, function(data){
                     
                        if(data == "1"){
                            Swal.fire({
                                title: '',
                                text: 'Professor cadastrado com sucesso.',
                                icon: 'success',
                                confirmButtonText: 'Fechar'
                            }).then((result) => {
                                if (result.value) {
                                    window.location.assign("professores.php"); 
                                }
                            });
                          
                        
                        }else if(data == "2"){
                            Swal.fire({
                                title: '',
                                text: 'Erro ao cadastrar o professor.',
                                icon: 'error',
                                confirmButtonText: 'Fechar'
                            }); 
                        }
                    
                });
            }

        }

    
        return false;
    });
    


});
