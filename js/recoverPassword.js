$(document).ready(function(){
    $(".msg-2").hide();   
    $('.loader-div').hide();
    $('.msg-recuperacao').show();
    
    
    $("#form-password").submit(function (event) {
        event.preventDefault();   
        $('.loader-div').show();
        $('.msg-recuperacao').hide();
        $(".recover").prop('disabled', true);

        email = $("#email-2").val();

        
        $.post("../curso/model/recoverPassword.php", {email: email}, function(retorno) {
             if(retorno){
                $('.loader-div').hide();
                $(".msg-2").show().html("Uma nova senha foi enviada ao seu e-mail.").css("color","green");   
            }else{
                $('.msg-recuperacao').show();
                $('.loader-div').hide();
                $(".msg-2").show().html("E-mail inválido.").css("color","red");
                $(".recover").prop('disabled', false);
            }
        });

    });
  
});