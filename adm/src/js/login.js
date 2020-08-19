function checarEmail(){
    if($("#txtEmail").val().indexOf('@')==-1 || $("#txtEmail").val().indexOf('.')==-1 ){
        return false;
    }
   
}
$(document).ready(function(){
    $("#form-login").submit(function() {
   
        if($("#txtEmail").val()== null || $("#txtEmail").val() ==""){
           
            Swal.fire({
                title: 'Campo obrigatorio!',
                text: 'Digite seu email',
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

                if($("#txtSenha").val()== null || $("#txtSenha").val() ==""){
                    Swal.fire({
                        title: 'Campo obrigatorio!',
                        text: 'Digite sua senha',
                        icon: 'warning',
                        confirmButtonText: 'Fechar'
                    }); 
                
                }else{

                    var email = $("#txtEmail").val();
                    var senha = $("#txtSenha").val();

                    $.post("model/processar.php",{
                        email:email,
                        senha:senha,
                        metodo:'logar',
                        entidade:'login'
                    }, function(data){
                        
                        if(data=="1"){
                            Swal.fire({
                                title: 'Erro!',
                                text: 'Senha incorreta',
                                icon: 'warning',
                                confirmButtonText: 'Fechar'
                            });
                        }else if(data=="2"){
                            Swal.fire({
                                title: 'Erro!',
                                text: 'Usuario não cadastrado',
                                icon: 'warning',
                                confirmButtonText: 'Fechar'
                            }); 
                        }else if(data=="3"){
                            Swal.fire({
                                title: 'Erro!',
                                text: 'Você tem uma sessão aberta em outra maquina.',
                                icon: 'warning',
                                confirmButtonText: 'Fechar'
                            }); 
                        }else if(data="4"){
                            window.location.assign("pages/index.php")
                        }
                       
                    });
                    
                }
            }
        }
        
        

        return false;
    });
    


});
